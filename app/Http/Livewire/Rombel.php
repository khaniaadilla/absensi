<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rombel as RombelModel;

class Rombel extends Component
{

    public $nama_rombel; 

    public function render()
    {
        $rombels = RombelModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.rombel',[
            'rombels' => $rombels
        ]);
    }
    public function store(){
        $this->validate([
            'nama_rombel' => 'required',
        ]);
        
        RombelModel::create([
            'nama_rombel' => $this->nama_rombel,
        ]);

        session()->flash('info', 'Rombel Created Successfully');
        $this->nama_rombel = '';
    }
}
