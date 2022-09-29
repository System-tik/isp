<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\frais;

class VFrais extends Component
{
    public $type;
    public $montant;
    public $fraiss;

    public function render()
    {
        $this->fraiss=frais::all();
        return view('livewire.admin.v-frais');
    }
    
    public function store(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
        ]);
        frais::create($record);
        $this->clear();
    }
    public function clear(){
        $this->type="";
        $this->montant="";
    }
    public function select($data)
    {
        $this->selectId=$data['id'];
        $this->type=$data['type'];
        $this->montant=$data['montant'];
    }
    public function delete(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
        ]);
        $valide=frais::find($this->selectId);
        $valide->delete();
    }
    public function update(){
        $record=$this->validate([
            'type'=>'required',
            'montant'=>'required',
        ]);
        $valide=frais::find($this->selectId);
        $valide->update($record);
    }


}
