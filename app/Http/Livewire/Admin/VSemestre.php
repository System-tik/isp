<?php

namespace App\Http\Livewire\Admin;

use App\Models\semestre;
use App\Models\system;
use App\Models\niveau;
use Livewire\Component;

class VSemestre extends Component
{
    public $nom;
    public $niveau_id;
    public $niveaux;
    public $selectedId;
    public $semestres;

    protected $messages = [
        'nom.required' => 'Veuillez indiquer le système.',
        'niveau_id.required' => 'Veuillez indiquer le niveau.',
        'selectedId' => 'Veuillez séléctionner un semestre.'
    ];
    public function render()
    {
        $this->semestres = semestre::join('niveaux', 'niveaux.id', '=', 'semestres.niveau_id')->orderBy('semestres.id', 'asc')->get('*');
        $this->systemes = system::all();
        $this->niveaux = niveau::all();
        return view('livewire.admin.v-semestre');
    }

    public function store()
    {
        $validate = $this->validate([
            'nom' => 'required',
            'niveau_id' => 'required'
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
        $this->nom = "";
        $this->niveau_id = "";
    }

    public function selectedId($donnees)
    {
        $this->nom = $donnees['nom'];
        $this->niveau_id = $donnees['niveau_id'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'nom' => 'required',
            'niveau_id' => 'required',
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
