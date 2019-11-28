<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{

    protected $table = 'compra_producto';

    public static $rules = [
        'compra_id'    => 'required|numeric',
        'producto_id'  => 'required|numeric' ,       
        'cantidad'     => 'required|numeric',
        'valor'        => 'required'
    ];

    public static $rulesUpdate = [
        'compra_id'    => 'nullable|numeric',
        'producto_id'  => 'nullable|numeric',       
        'cantidad'     => 'nullable|numeric',
        'valor'        => 'nullable'
    ];

    protected $fillable = [
        'id',
        'compra_id',
        'producto_id',
        'cantidad',
        'valor'
    ];

    protected $visible = [
        'id',
        'compra_id',
        'producto_id',
        'cantidad',
        'valor'
    ];
}
