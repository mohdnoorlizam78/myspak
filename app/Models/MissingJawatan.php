<?php

namespace App\Models;
use App\Models\Jawatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissingJawatan extends Jawatan
{
    use HasFactory;
    protected static $unguarded = true;

    protected $attributes = [
        //'nama_jawatan'  => ''
        'nama_jawatan' => 'Belum ditentukan'
    ];
}
