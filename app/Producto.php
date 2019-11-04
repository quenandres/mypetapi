<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'id',
        'Nombre',
        'Categoria',
        'Stock',
        'Precio',
        'Description',
        'id_tienda'
    ];
}
