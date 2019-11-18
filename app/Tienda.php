<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table = 'tienda';

    public static $rules = [
        'nombre'       => 'required|string',
        'direccion' => 'required|numeric'        
    ];

    public static $rulesUpdate = [
        'nombre'       => 'nullable|string',
        'direccion' => 'nullable|numeric'       
    ];

    protected $fillable = [
        'nombre',
        'direccion'       
    ];

    protected $visible = [
        'id',
        'nombre',
        'direccion'
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
