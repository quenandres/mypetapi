<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'Nombres',
        'Apellidos',
        'Correo',
        'Password',
        'CC',
        'Telefono',
        'Ciudad',
        'Barrio',
        'Direccion'
    ];
}
