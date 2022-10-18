<?php

namespace App\Http\Livewire\Admin;

use App\Models\frais;
use App\Models\niveau;
use App\Models\system;
use Livewire\Component;


class VFrais extends Component
{
    public $type;
    public $montant;
    public $niveaux;
    public $systemes;
    public $fraiss;

    public function render()
    {
        $this->fraiss=frais::all();
        $this->niveaux=niveau::all();
        $this->systemes=niveau::all();
        return view('livewire.admin.v-frais');
    }
    
    public function store(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
            'niveau_id'=>'required',
            'system_id'=>'required'
        ]);
        frais::create($record);
        $this->clear();
    }
    public function clear(){
        $this->type="";
        $this->montant="";
        $this->niveaux="";
        $this->systemes="";
    }
    public function select($data)
    {
        $this->selectId=$data['id'];
        $this->type=$data['type'];
        $this->montant=$data['montant'];
        $this->niveaux=$data['niveau_id'];
        $this->systemes=$data['system_id'];
    }
    public function delete(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
            'niveau_id'=>'required',
            'system_id'=>'required'
        ]);
        $valide=frais::find($this->selectId);
        $valide->delete();
    }
    public function update(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
            'niveau_id'=>'required',
            'system_id'=>'required'
        ]);
        $valide=frais::find($this->selectId);
        $valide->update($record);
    }


}
