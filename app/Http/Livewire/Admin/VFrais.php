<?php

namespace App\Http\Livewire\Admin;

use App\Models\frais;
use Livewire\Component;

class VFrais extends Component
{
    public $type;
    public $montant;
    public $selectedId;
    public $frais;

    protected $messages = [
        'type.required' => 'Veuillez indiquer le type.',
        'montant.required' => 'Veuillez saisir le montant.',
        'selectedId.required' => 'Veuillez séléctionner un frais'
    ];
    
    public function render()
    {
        $this->frais = frais::all();
        return view('livewire.admin.v-frais');
    }

    public function store()
    {
        $validate = $this->validate([
            'type' => 'required',
            'montant' => 'required'
        ]);

        try {
            $record = frais::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'frais enregistré!']);
            $this->emit('frais');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->type = "";
        $this->montant = "";
    }

    public function selectedId($donnees)
    {
        $this->type = $donnees['type'];
        $this->montant = $donnees['montant'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'type' => 'required',
            'montant' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = frais::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'frais enregistré!']);
            $this->emit('frais');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }
    }

    public function delete()
    {
        try {
            $record = frais::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'frais enregistré!']);
            $this->emit('frais');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
