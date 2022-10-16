<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\about;

class VAbout extends Component
{

    public $titre;
    public $descrip;
    public $selectId;
    public $abouts;


    public function render()
    {
        $this->abouts=about::all();
        return view('livewire.admin.v-about');
    }
    public function store(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required'
        ]);
        
        about::create($record);
        $this->clear();
    }

    public function clear(){
        $this->titre="";
        $this->descrip="";
    }

    public function select($data){
        $this->selectId = $data["id"];
        $this->titre = $data["titre"];
        $this->descrip = $data['descrip'];
    }

    public function update(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required'
        ]);
        $result=about::find($this->selectId);
        $result->update($record);

        $this->clear();
    }

    public function delete(){
        $record=$this->validate([
            'titre'=>'required',
            'descrip'=>'required'
        ]);
        $result=about::find($this->selectId);
        $result->delete();

        $this->clear();
    }
}
