<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rayon as RayonModel;

class Rayon extends Component
{

    public $nama_rayon, $nama_pemray; 

    public function render()
    {
        $rayons = RayonModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.rayon',[
            'rayons' => $rayons
        ]);
    }
    public function store(){
        $this->validate([
            'nama_rayon' => 'required',
            'nama_pemray' => 'required',
        ]);
        
        RayonModel::create([
            'nama_rayon' => $this->nama_rayon,
            'nama_pemray' => $this->nama_pemray,
        ]);

        session()->flash('info', 'Rayon Created Successfully');
        $this->nama_rayon = '';
        $this->nama_pemray = '';
    }
}
