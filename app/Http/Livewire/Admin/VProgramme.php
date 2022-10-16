<?php

namespace App\Http\Livewire\Admin;

use App\Models\program;
use App\Models\option;
use Livewire\Component;

class VProgramme extends Component
{
    public $idoption;
    public $options;
    public $nomCours;
    public $descrip;
    public $selectedId;
    public $programmes;

    protected $messages = [
        'idoption.required' => 'Veuillez indiquer l\'option.',
        'nomCours.required' => 'Veuillez saisir le cours.',
        'descrip.required' => 'Veuillez saisir une déscription.',
        'selectedId' => 'Veuillez séléctionner un programme.'
    ];

    public function render()
    {
        $this->programmes = program::all();
        $this->options = option::all();
        return view('livewire.admin.v-programme');
    }

    public function store()
    {
        $validate = $this->validate([
            'idoption' => 'required',
            'nomCours' => 'required',
            'descrip' => 'required'
        ]);

        try {
            $record = program::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure enregistré!']);
            $this->emit('infrastruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->idoption = "";
        $this->nomCours = "";
        $this->descrip = "";
    }

    public function selectedId($donnees)
    {
        $this->idoption = $donnees['idoption'];
        $this->nomCours = $donnees['nomCours'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'idoption' => 'required',
            'nomCours' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = program::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'programme modifié!']);
            $this->emit('insfractruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = program::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'programme supprimé!']);
            $this->emit('program');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
