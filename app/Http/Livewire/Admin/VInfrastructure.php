<?php

namespace App\Http\Livewire\Admin;

use App\Models\insfrastruct;
use Livewire\Component;
use Livewire\WithFileUploads;

class VInfrastructure extends Component
{
    use WithFileUploads;
    public $nombatiment;
    public $descrip;
    public $selectedId;
    public $infrastructures;
    public $photo;

    protected $messages = [
        'nombatiment.required' => 'Veuillez indiquer le nom.',
        'descrip.required' => 'Veuillez saisir une déscription.',
        'selectedId' => 'Veuillez séléctionner une infrastructure.'
    ];
    
    public function render()
    {
        $this->infrastructures = insfrastruct::all();
        return view('livewire.admin.v-infrastructure');
    }

    public function store()
    {
        $validate = $this->validate([
            'nombatiment' => 'required',
            'descrip' => 'required'
        ]);

        /* $ret = Storage::disk('local')->put('gallerie', $request->img);
        die(); */
    
        try {
            $record = insfrastruct::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure enregistré!']);
            $this->emit('infrastruct');
            $this->photo->storePubliclyAs('public/gallerie/', $record->id.'.png');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }


    }

    public function clear()
    {
        $this->nombatiment = "";
        $this->descrip = "";
    }

    public function selectedId($donnees)
    {
        $this->nombatiment = $donnees['nombatiment'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'nombatiment' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = insfrastruct::find($this->selectedId);
            $record->update($validate);
            if(!empty($this->photo)){
                $this->photo->storePubliclyAs('public/gallerie/', $record->id.'.png');
            }
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure modifié!']);
            $this->emit('insfractruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = insfrastruct::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'insfrastructure suprimé!']);
            $this->emit('insfrastruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
