<?php

namespace App\Http\Livewire\Admin;

use App\Models\niveau;
use App\Models\system;
use Livewire\Component;

class VNiveau extends Component
{
    public $niveaux;
    public $systemes;
    public $lib;
    public $system_id;

    public function render()
    {
        $this->niveaux = niveau::all();
        $this->systemes = system::all();
        return view('livewire.admin.v-niveau');
    }

    public function store()
    {
        $validate = $this->validate([
            'lib' => 'required',
            'system_id' => 'required'
        ]);

        try {
            $record = niveau::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'niveau enregistré!']);
            $this->emit('niveau');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }

    public function clear()
    {
        $this->lib = "";
        $this->system_id = "";
    }

    public function selectedId($donnees)
    {
        $this->lib = $donnees['lib'];
        $this->system_id = $donnees['system_id'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'lib' => 'required',
            'system_id' => 'required'
        ]);

        try {
            $record = niveau::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'niveau modifié!']);
            $this->emit('niveau');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = niveau::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'niveau supprimé!']);
            $this->emit('niveau');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
