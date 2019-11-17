<?php

namespace App\Http\Controllers;

use App\Producto;
use Validator;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json('Respuesta de index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), Producto::$rules);


        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            Producto::create($request->all());
            return response()->json('Respuesta de index', 200);    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $productos)
    {
        //
    }
}
