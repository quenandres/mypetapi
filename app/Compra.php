<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'id',
        'id_cliente',
        'id_tienda'
    ];
}
