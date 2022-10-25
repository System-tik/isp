<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\header;
use Livewire\WithFileUploads;


class VHeader extends Component
{
    use WithFileUploads;
    public $headers;
    public $titre;
    public $sous;
    public $descrip;
    public $photo;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'sous.required' => 'Veuillez saisir le sous titre.',
        'descrip.required' => 'Veuillez saisir la description.',
        'selectedId' => 'Veuillez séléctionner une header.'
    ];


    public function render()
    {
        $this->headers = header::all();
        return view('livewire.admin.v-header');
    }

    public function store()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'sous' => 'required',
            'descrip' => 'required',

        ]);

        try {
            $record = header::create($validate);
            $this->photo->storePubliclyAs('public/header/', $record->id.'.png');
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'header enregistrée!']);
            $this->emit('header');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->sous = "";
        $this->descrip = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->titre = $donnees['titre'];
        $this->sous = $donnees['sous'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'sous' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = header::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'header enregistré!']);
            $this->emit('header');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = header::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'header enregistré!']);
            $this->emit('header');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }
}

