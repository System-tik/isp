<?php

namespace App\Http\Livewire\Admin;

use App\Models\comite;
use Livewire\Component;
use Livewire\WithFileUploads;

class VComite extends Component
{
    use WithFileUploads;
    public $comites;
    public $titre;
    public $niveau;
    public $noms;
    public $photo;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'niveau.required' => 'Veuillez saisir le niveau titre.',
        'noms.required' => 'Veuillez saisir la nomstion.',
        'selectedId' => 'Veuillez séléctionner une comite.'
    ];

    public function render()
    {
        $this->comites = comite::all();
        return view('livewire.admin.v-comite');
    }
    public function store()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'niveau' => 'required',
            'noms' => 'required',

        ]);

        try {
            $record = comite::create($validate);
            $this->photo->storePubliclyAs('public/comite/', $record->id.'.png');
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'comite enregistrée!']);
            $this->emit('comite');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->niveau = "";
        $this->noms = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->titre = $donnees['titre'];
        $this->niveau = $donnees['niveau'];
        $this->noms = $donnees['noms'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'niveau' => 'required',
            'noms' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = comite::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'comite enregistré!']);
            $this->emit('comite');
            if(!empty($this->photo)){
                //dd("vide mon cher");
                $this->photo->storePubliclyAs('public/comite/', $this->selectedId.'.png');
            }
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = comite::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'comite enregistré!']);
            $this->emit('comite');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }
}
 