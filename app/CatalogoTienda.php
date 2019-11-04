<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoTienda extends Model
{
    protected $fillable = [
        'id',
        'id_producto',
        'id_tienda'
    ];
}
