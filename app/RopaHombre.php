<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RopaHombre extends Model
{
    protected $table = 'camisa_hombre';

    protected $fillable = [
        'nombre', 'precio', 'codigo', 'stock',
    ];
}
