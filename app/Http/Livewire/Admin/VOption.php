<?php

namespace App\Http\Livewire\Admin;

use App\Models\option;
use App\Models\departement;
use Livewire\Component;

class VOption extends Component
{
    public $nomopt;
    public $iddep;
    public $selectedId;
    public $options;
    public $departements;

    protected $messages = [
        'nomopt.required' => 'Veuillez indiquer l\'option.',
        'iddep.required' => 'Veuillez indiquer le département.',
        'selectedId' => 'Veuillez séléctionner une option.'
    ];

    public function render()
    {
        $this->options = option::all();
        $this->departements = departement::all();
        return view('livewire.admin.v-option');
    }

    public function store()
    {
        $validate = $this->validate([
            'nomopt' => 'required',
            'iddep' => 'required'
        ]);

        try {
            $record = option::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'option enregistrée!']);
            $this->emit('option');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->nomopt = "";
        $this->iddep = "";
    }

    public function selectedId($donnees)
    {
        $this->nomopt = $donnees['nomopt'];
        $this->iddep = $donnees['iddep'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'nomopt' => 'required',
            'iddep' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = option::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'option modifiée!']);
            $this->emit('option');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        $validate = $this->validate([
            'selectedId' => 'required'
        ]);

        try {
            $record = option::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'option supprimée!']);
            $this->emit('option');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
