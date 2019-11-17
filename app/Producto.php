<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    public static $rules = [
        'nombre'       => 'required|string',
        'categoria'    => 'required|numeric',
        'stock'        => 'nullable',
        'precio'       => 'required',
        'description'  => 'required|string',
    ];

    protected $fillable = [
        'nombre',
        'categoria',
        'stock',
        'precio',
        'description',
    ];

    protected $visible = [
        'id',
        'nombre',
        'categoria',
        'stock',
        'precio',
        'description',
        'id_tienda'
    ];
}
