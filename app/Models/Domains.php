<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
    protected $table = 'domains';

    protected $fillable = [
        'nombre',
    ];
}
