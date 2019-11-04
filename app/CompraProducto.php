<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{
    protected $fillable = [
        'id',
        'id_compra',
        'id_producto',
        'cantidad',
        'valor'
    ];
}
