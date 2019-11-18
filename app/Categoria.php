<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    public static $rules = [
        'nombre'       => 'required|string',
        'descripcion'  => 'required|string'        
    ];

    public static $rulesUpdate = [
        'nombre'      => 'nullable|string',
        'descripcion' => 'nullable|string'       
    ];

    protected $fillable = [
        'id',
        'nombre',
        'descripcion'
    ];

    protected $visible = [
        'id',
        'nombre',
        'descripcion'
    ];
}
