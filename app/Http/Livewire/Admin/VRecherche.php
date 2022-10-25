<?php

namespace App\Http\Livewire\Admin;

use App\Models\recherchesc;
use Livewire\Component;
use Livewire\WithFileUploads;

class VRecherche extends Component
{
    use WithFileUploads;
    public $reches;
    public $titre;
    public $type;
    public $descrip;
    public $fichier;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'type.required' => 'Veuillez saisir le type titre.',
        'descrip.required' => 'Veuillez saisir la description.',
        'selectedId' => 'Veuillez séléctionner une recherchesc.'
    ];

    public function render()
    {
        $this->reches = recherchesc::all();
        return view('livewire.admin.v-recherche');
    }

    public function store()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'type' => 'required',
            'descrip' => 'required',

        ]);

        try {
            $record = recherchesc::create($validate);
            $this->fichier->storePubliclyAs('public/recherches/', $record->id.'.pdf');
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'recherchesc enregistrée!']);
            $this->emit('recherchesc');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->type = "";
        $this->descrip = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->titre = $donnees['titre'];
        $this->type = $donnees['type'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'type' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = recherchesc::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'recherchesc enregistré!']);
            $this->emit('recherchesc');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = recherchesc::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'recherchesc enregistré!']);
            $this->emit('recherchesc');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }
}
