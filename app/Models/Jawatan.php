<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawatan extends Model
{
    use HasFactory;
    protected $table = 'jawatan';

    public static function findOrMissing($id)
    {
        return self::find($id) ?? MissingJawatan::make();
    }
}
