<?php

namespace App\Http\Livewire\Admin;

use App\Models\program;
use App\Models\option;
use App\Models\semestre;
use Livewire\Component;

class VProgramme extends Component
{
    public $idoption;
    public $options;
    public $semestres;
    public $nomCours;
    public $descrip;
    public $semestre_id;
    public $selectedId;
    public $programmes;
    public $credit;

    protected $messages = [
        'idoption.required' => 'Veuillez indiquer l\'option.',
        'nomCours.required' => 'Veuillez saisir le cours.',
        'descrip.required' => 'Veuillez saisir une déscription.',
        'semestre_id.required'=>'Veuillez indiquer le semestre',
        'selectedId' => 'Veuillez séléctionner un programme.'
    ];

    public function render()
    {
        $this->programmes = program::all();
        $this->semestres = semestre::all();
        $this->options = option::all();
        return view('livewire.admin.v-programme');
    }

    public function store()
    {
        $validate = $this->validate([
            'idoption' => 'required',
            'nomCours' => 'required',
            'semestre_id' => 'required',
            'descrip' => 'required',
            'credit' => 'required'
        ]);
        //dd($validate);

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
        $this->semestre_id = "";
        $this->credit = "";
    }

    public function selectedId($donnees)
    {
        $this->idoption = $donnees['idoption'];
        $this->nomCours = $donnees['nomCours'];
        $this->credit = $donnees['credit'];
        $this->semestre_id = $donnees['semestre_id'];
        $this->descrip = $donnees['descrip'];

        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'idoption' => 'required',
            'nomCours' => 'required',
            'credit' => 'required',
            'descrip' => 'required',
            'semestre_id' => 'required',
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


