<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Rombel;
use App\Http\Livewire\Rayon;
use App\Http\Livewire\Senbud;
use App\Http\Livewire\Upd;
use App\Http\Livewire\Siswa;
use App\Http\Livewire\Absensi;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rombels', Rombel::class);
Route::get('/rayons', Rayon::class);
Route::get('/senbuds', Senbud::class);
Route::get('/upds', Upd::class);
Route::get('/siswas', Siswa::class);
Route::get('/absensis', Absensi::class);

