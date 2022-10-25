<?php

namespace App\Http\Livewire\Admin;

use App\Models\textlegaux;
use Livewire\Component;

class VTextes extends Component
{
    public $textes;
    public $titre;
    public $descrip;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'descrip.required' => 'Veuillez saisir la description.',
        'selectedId' => 'Veuillez séléctionner une textlegaux.'
    ];

    public function render()
    {
        $this->textes = textlegaux::all();
        return view('livewire.admin.v-textes');
    }

    public function store()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',

        ]);

        try {
            $record = textlegaux::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'textlegaux enregistrée!']);
            $this->emit('textlegaux');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->descrip = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->titre = $donnees['titre'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = textlegaux::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'textlegaux enregistré!']);
            $this->emit('textlegaux');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = textlegaux::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'textlegaux enregistré!']);
            $this->emit('textlegaux');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }
}
