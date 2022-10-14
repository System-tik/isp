<?php

namespace App\Http\Livewire\Admin;

use App\Models\departement;
use App\Models\section;
use Livewire\Component;

class VDepartement extends Component
{
    public $nomdep;
    public $idsec;
    public $selectedId;
    public $departements;

    public function render()
    {
        $this->section = section::all();
        $this->departements = departement::all();
        return view('livewire.admin.v-departement');

    }

    public function store()
    {
        $validate = $this->validate([
            'nomdep' => 'required',
            'idsec' => 'required'
        ]);

        try {
            $record = departement::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'département enregistré!']);
            $this->emit('departement');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->nomdep = "";
        $this->idsec = "";
    }

    public function selectedId($donnees)
    {
        $this->nomdep = $donnees['nomdep'];
        $this->idsec = $donnees['idsec'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'nomdep' => 'required',
            'idsec' => 'required'
        ]);

        try {
            $record = departement::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'département enregistré!']);
            $this->emit('departement');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = departement::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'département enregistré!']);
            $this->emit('departement');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
