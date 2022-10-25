<?php

namespace App\Http\Livewire\Admin;

use App\Models\actualite;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class VActu extends Component
{
    use WithFileUploads;
    public $actus;
    public $titre;
    public $auteur;
    public $descrip;
    public $images = [];
    public $photos;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'auteur.required' => 'Veuillez saisir le auteur titre.',
        'descrip.required' => 'Veuillez saisir la description.',
        'selectedId' => 'Veuillez séléctionner une actualite.'
    ];

    public function render()
    {
        $this->actus = actualite::all();
        return view('livewire.admin.v-actu');
    }

    public function store()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'descrip' => 'required',

        ]);

        try {
            $record = actualite::create($validate);
            for ($i=0; $i < count($this->photos); $i++) { 
                # code...
                $this->photos[$i]->storePubliclyAs('public/actualite/'.$record->id.'/', $i.'.png');
                $this->emitSelf('imgUpdate');
            }
            foreach (Storage::files('public/actualite/'.$record->id) as $img){
    
                array_push($this->images, asset(str_replace('public', 'storage', $img)));
            }
            $record->update(['images'=>$this->images]);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'actualite enregistrée!']);
            $this->emit('actualite');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->auteur = "";
        $this->descrip = "";
        $this->selectedId = "";
    }

    public function selectedId($donnees)
    {
        $this->titre = $donnees['titre'];
        $this->auteur = $donnees['auteur'];
        $this->descrip = $donnees['descrip'];
        $this->selectedId = $donnees['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'descrip' => 'required',
            'selectedId' => 'required'
        ]);

        try {
            $record = actualite::find($this->selectedId);
            $record->update($validate);
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'actualite enregistré!']);
            $this->emit('actualite');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            
        }

        $this->clear();
    }

    public function delete()
    {
        try {
            $record = actualite::find($this->selectedId);
            $record->delete();
            $this->clear();
            $this->dispatchBrowserEvent('confirm', ['message' => 'actualite enregistré!']);
            $this->emit('actualite');
        } catch (\Exception $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
        }

        $this->clear();
    }

}
