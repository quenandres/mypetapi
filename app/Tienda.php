<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table = 'tienda';

    public static $rules = [
        'nombre'       => 'required|string',
        'direccion' => 'required|numeric',
        'imagen' => 'required'
    ];

    public static $rulesUpdate = [
        'nombre'       => 'nullable|string',
        'direccion' => 'nullable|numeric',
        'imagen' => 'nullable'
    ];

    protected $fillable = [
        'nombre',
        'direccion',
        'imagen'
    ];

    protected $visible = [
        'id',
        'nombre',
        'direccion',
        'imagen'
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
