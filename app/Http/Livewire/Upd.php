<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upd as UpdModel;

class Upd extends Component
{

    public $nama_upd, $pj_upd; 

    public function render()
    {
        $upds = UpdModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.upd',[
            'upds' => $upds
        ]);
    }
    public function store(){
        $this->validate([
            'nama_upd' => 'required',
            'pj_upd' => 'required',
        ]);
        
        UpdModel::create([
            'nama_upd' => $this->nama_upd,
            'pj_upd' => $this->pj_upd,
        ]);

        session()->flash('info', 'UPD Created Successfully');
        $this->nama_upd = '';
        $this->pj_upd = '';
    }
}
