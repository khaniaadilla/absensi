<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table = 'rombel';
    protected $guarded = [];
    protected $fillable = [
        'nama_rombel'
    ];
    use HasFactory;
}
