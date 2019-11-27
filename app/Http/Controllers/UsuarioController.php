<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $usuario = User::select('*')->where('id',$id)->get();        
        return response()->json(['data' => $usuario], 200);
    }


    public function login($user, $pass) {
        
        $usuario = User::select('*')->where('email','=',$user)->where('password','=', $pass)->first();

       if( !is_null($usuario) ) {
           return response()->json(['data' => true], 200);
       } else {
           return response()->json(['data' => false], 200);
       }
    }
}
