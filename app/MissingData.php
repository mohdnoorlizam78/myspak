<?php

namespace App;
use App\Models\User;

class MissingData extends User
{
    protected static $unguarded = true;

    protected $attributes = [
        'name'  => 'Belum disahkan',
        'nama_jawatan' => 'Belum disahkan',
        'nama_kerja' => 'Belum ditentukan',
        'nama_tindakan' => 'Belum diambil tindakan'
    ];
}