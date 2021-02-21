<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Senbud as SenbudModel;

class Senbud extends Component
{

    public $nama_senbud, $pj_senbud; 

    public function render()
    {
        $senbuds = SenbudModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.senbud',[
            'senbuds' => $senbuds
        ]);
    }
    public function store(){
        $this->validate([
            'nama_senbud' => 'required',
            'pj_senbud' => 'required',
        ]);
        
        SenbudModel::create([
            'nama_senbud' => $this->nama_senbud,
            'pj_senbud' => $this->pj_senbud,
        ]);

        session()->flash('info', 'Senbud Created Successfully');
        $this->nama_senbud = '';
        $this->pj_senbud = '';
    }
}
