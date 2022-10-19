<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\condition;

class VConditionAd extends Component
{
    public $titre;
    public $descrip;
    public $selectId;
    public $conditions;

    public function render()
    {
        $this->conditions=condition::all();
        return view('livewire.admin.v-condition-ad');
        
    }
    public function store(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required'
        ]);
        //dd($record);
        condition::create($record);
        $this->clear();

    }
    public function clear(){
        $this->titre="";
        $this->descrip="";
    }
    public function select($data)
    {
        $this->selectId=$data['id'];
        $this->titre=$data['titre'];
        $this->descrip=$data['descrip'];
    }
    public function delete(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required',
        ]);
        $valide=condition::find($this->selectId);
        $valide->delete();
    }
    public function update(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required',
        ]);
        $valide=condition::find($this->selectId);
        $valide->update($record);
    }
}
