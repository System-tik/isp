<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\system;

class VSysteme extends Component
{
    public $libelle;
    public $selectId;
    public $systemes;

    public function render()
    {
        $this->systemes=system::all();
        return view('livewire.admin.v-systeme');
    }

    public function store(){
        $record=$this->validate([
            'libelle'=>'required',
        ]);
        system::create($record);
        $this->clear();
    }
    public function clear(){
        $this->libelle="";
    }
    public function select($data)
    {
        $this->selectId=$data['id'];
        $this->libelle=$data['libelle'];
    }
    public function delete(){
        $record=$this->validate([
            'libelle'=>'required',
        ]);
        $valide=system::find($this->selectId);
        $valide->delete();
    }

}
