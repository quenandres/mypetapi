<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'correo',
        'password',
        'cc',
        'telefono',
        'ciudad',
        'barrio',
        'direccion'
    ];
}
