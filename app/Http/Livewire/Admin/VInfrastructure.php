<?php

namespace App\Http\Livewire\Admin;

use App\Models\insfrastruct;
use Livewire\Component;

class VInfrastructure extends Component
{
    public $nombatiment;
    public $descrip;
    public $selectedId;
    public $infrastructures;

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

        try {
            $record = insfrastruct::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure enregistré!']);
            $this->emit('infrastruct');
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
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure enregistré!']);
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
            $this->dispatchBrowserEvent('confirm', ['message' => 'insfrastructure enregistré!']);
            $this->emit('insfrastruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
