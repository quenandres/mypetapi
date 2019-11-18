<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    public static $rules = [
        'nombre'    => 'required|string',
        'apellido'  => 'required|string',
        'email'     => 'required|string',
        'password'  => 'required|string',
        'cc'        => 'required|string',
        'tipo'      => 'required|string'
    ];

    public static $rulesUpdate = [
        'nombre'    => 'nullable',
        'apellido'  => 'nullable',
        'email'     => 'nullable',
        'password'  => 'nullable',
        'cc'        => 'nullable',
        'tipo'      => 'nullable'
    ];
    
    protected $fillable = [
        'nombre',
        'apellido',
        'email', 
        'password',
        'cc',
        'tipo',
    ];


    protected $visible = [
        'id',
        'nombre',
        'apellido',
        'email', 
        'cc',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
