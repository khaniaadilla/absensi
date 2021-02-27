<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        $rombels = Rombel::latest()->paginate(5);
        return view('livewire.rombel',compact('rombels'))
        ->with('i', (request()->input('page',1) - 1) * 5);
    }
}
