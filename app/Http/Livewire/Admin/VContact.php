<?php

namespace App\Http\Livewire\Admin;

use App\Models\contact;
use Livewire\Component;

class VContact extends Component
{
    public $contenu;
    public $type;
    public $icon;
    public $selectedId;
    public $contacts;

    protected $messages = [
        'contenu.required' => 'Veuillez indiquer l\'contact.',
        'type.required' => 'Veuillez indiquer le département.',
        'selectedId' => 'Veuillez séléctionner une contact.'
    ];

    public function render()
    {
        $this->contacts = contact::all();
        return view('livewire.admin.v-contact');
    }

    public function store()
    {
        $validate = $this->validate([
            'contenu' => 'required',
            'icon' => 'required',
            'type' => 'required'
        ]);
        //dd($validate);

        try {
            $record = contact::create($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'contact enregistrée!']);
            $this->emit('contact');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

    }

    public function clear()
    {
        $this->contenu = "";
        $this->icon = "";
        $this->type = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->contenu = $donnees['contenu'];
        $this->icon = $donnees['icon'];
        $this->type = $donnees['type'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'contenu' => 'required',
            'icon' => 'required',
            'type' => 'required',
        ]);

        try {
            $record = contact::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'contact modifiée!']);
            $this->emit('contact');
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
            $record = contact::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'contact supprimée!']);
            $this->emit('contact');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }
    }
}
