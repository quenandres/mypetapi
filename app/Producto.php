<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    public static $rules = [
        'nombre'       => 'required|string',
        'categoria_id' => 'required|numeric',
        'tienda_id'    => 'required|numeric',
        'stock'        => 'nullable',
        'imagen'       => 'required',
        'precio'       => 'required',
        'descripcion'  => 'required|string'
    ];

    public static $rulesUpdate = [
        'nombre'       => 'nullable|string',
        'categoria_id' => 'nullable|numeric',
        'tienda_id'    => 'nullable|numeric',
        'stock'        => 'nullable',
        'imagen'        => 'nullable',
        'precio'       => 'nullable',
        'descripcion'  => 'nullable|string'
    ];

    protected $fillable = [
        'nombre',
        'categoria_id',
        'tienda_id',
        'stock',
        'imagen',
        'precio',
        'descripcion'
    ];

    protected $visible = [
        'id',
        'nombre',
        'categoria_id',
        'tienda_id',
        'stock',
        'imagen',
        'precio',
        'descripcion'
    ];

    public function categoria()
    {
        return $this->hasOne('App\Categoria');
    }
}
