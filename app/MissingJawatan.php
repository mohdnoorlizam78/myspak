<?php

namespace App;
use App\Models\Jawatan;

class MissingJawatan extends Jawatan
{
    protected static $unguarded = true;

    protected $attributes = [
        //'nama_jawatan'  => ''
        'nama_jawatan' => 'Belum disahkan'
    ];
}
