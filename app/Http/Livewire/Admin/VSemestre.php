<?php

namespace App\Http\Livewire\Admin;

use App\Models\semestre;
use App\Models\system;
use App\Models\niveau;
use Livewire\Component;

class VSemestre extends Component
{
    public $systemes;
    public $niveaux;
    public $selectedId;
    public $semestres;

    protected $messages = [
        'system.required' => 'Veuillez indiquer le système.',
        'niveau.required' => 'Veuillez indiquer le niveau.',
        'selectedId' => 'Veuillez séléctionner un semestre.'
    ];
    public function render()
    {
        $this->semestres = semestre::all();
        $this->systemes = system::all();
        $this->niveaux = niveau::all();
        return view('livewire.admin.v-semestre');
    }

    public function store()
    {
        $validate = $this->validate([
            'system' => 'required',
            'niveau' => 'required'
        ]);

        try {
            $record = semestre::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'infrastructure enregistré!']);
            $this->emit('infrastruct');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->system = "";
        $this->niveau = "";
    }

    public function selectedId($donnees)
    {
        $this->system = $donnees['system'];
        $this->niveau = $donnees['niveau'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'system' => 'required',
            'niveau' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = semestre::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'semestre enregistré!']);
            $this->emit('semestre');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = semestre::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'semestre enregistré!']);
            $this->emit('semestre');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
