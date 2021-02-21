<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absensi as AbsensiModel;

class Absensi extends Component
{

    public $nis, $tgl_absensi, $jk, $ket_absensi; 

    public function render()
    {
        $absensis = AbsensiModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.absensi',[
            'absensis' => $absensis
        ]);
    }
    public function store(){
        $this->validate([
            'nis' => 'required',
            'tgl_absensi' => 'required',
            'jk' => 'required',
            'ket_absensi' => 'required',
        ]);
        
        AbsensiModel::create([
            'nis' => $this->nis,
            'tgl_absensi' => $this->tgl_absensi,
            'jk' => $this->jk,
            'ket_absensi' => $this->ket_absensi,
            
        ]);

        session()->flash('info', 'Absensi Created Successfully');
        $this->nis = '';
        $this->tgl_absensi = '';
        $this->jk = '';
        $this->ket_absensi = '';
    }
}
