<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    
    protected $table = 'compra';

    public static $rules = [
        'user_id'    => 'required|numeric',
        'tienda_id'     => 'required|numeric'        
    ];

    public static $rulesUpdate = [
        'user_id'    => 'nullable|numeric',
        'tienda_id'     => 'nullable|numeric'       
    ];

    protected $fillable = [
        'id',
        'user_id',
        'tienda_id'
    ];

    protected $visible = [
        'id',
        'user_id',
        'tienda_id'
    ];


    
}
