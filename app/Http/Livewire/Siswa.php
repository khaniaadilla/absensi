<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa as SiswaModel;

class Siswa extends Component
{

    public $nis, $nama, $id_rombel, $id_rayon, $id_senbud, $id_upd, $alamat, $tgl_lahir, $jk; 

    public function render()
    {
        $siswas = SiswaModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.siswa',[
            'siswas' => $siswas
        ]);
    }
    public function store(){
        $this->validate([
            'nis' => 'required',
            'nama' => 'required',
            'id_rombel' => 'required',
            'id_rayon' => 'required',
            'id_senbud' => 'required',
            'id_upd' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
        ]);
        
        SiswaModel::create([
            'nis' => $this->nis,
            'nama' => $this->nama,
            'id_rombel' => $this->id_rombel,
            'id_rayon' => $this->id_rayon,
            'id_senbud' => $this->id_senbud,
            'id_upd' => $this->id_upd,
            'alamat' => $this->alamat,
            'tgl_lahir' => $this->tgl_lahir,
            'jk' => $this->jk,
        ]);

        session()->flash('info', 'Siswa Created Successfully');
        $this->nis = '';
        $this->nama = '';
        $this->id_rombel = '';
        $this->id_rayon = '';
        $this->id_senbud = '';
        $this->id_upd = '';
        $this->alamat = '';
        $this->tgl_lahir = '';
        $this->jk = '';
    }
}
