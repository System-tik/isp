<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\calendrier;

class VCalendrier extends Component
{
    public $activite;
    public $descrip;
    public $debut;
    public $fin;
    public $calendriers;

    public function render()
    {
        $this->calendriers=calendrier::all();
        return view('livewire.admin.v-calendrier');
    }
    public function store(){
        $record=$this->validate([
            'activite'=>'required',
            'descrip'=>'required',
            'debut'=>'required',
            'fin'=>'required'
        ]);
        calendrier::create($record);
        $this->clear();
    }

    public function clear(){
        $this->activite="";
        $this->descrip="";
        $this->debut="";
        $this->fin="";
    }

    public function select($data){
        $this->selectId = $data["id"];
        $this->activite = $data["activite"];
        $this->descrip = $data['descrip'];
        $this->debut = $data["debut"];
        $this->fin = $data['fin']; 
    }

    public function update(){
        $record=$this->validate([
            'activite'=>'required',
            'descrip'=>'required',
            'debut'=>'required',
            'fin'=>'required'
        ]);
        $result=calendrier::find($this->selectId);
        $result->update($record);
    }
    public function delete(){
        $record=$this->validate([
            'activite'=>'required',
            'descrip'=>'required',
            'debut'=>'required',
            'fin'=>'required'
        ]);
        $result=calendrier::find($this->selectId);
        $result->delete();
    }
}
