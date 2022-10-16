<?php

namespace App\Http\Livewire\Admin;

use App\Models\section;
use Livewire\Component;

class VSection extends Component
{
    public $nomsec;
    public $selectedId;
    public $sections;

    protected $messages = [
        'nomsec.required' => 'Veuillez saisir la section.',
        'selectedId' => 'Veuillez séléctionner une section.'
    ];

    public function render()
    {
        $this->sections = section::all();
        return view('livewire.admin.v-section');
    }

    public function store()
    {
        $validate = $this->validate([
            'nomsec' => 'required',
        ]);

        try {
            $record = section::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'section enregistrée!']);
            $this->emit('section');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->nomsec = "";
    }

    public function selectedId($donnees)
    {
        $this->nomsec = $donnees['nomsec'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'nomsec' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = section::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'section enregistré!']);
            $this->emit('section');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = section::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'section enregistré!']);
            $this->emit('section');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }
}
