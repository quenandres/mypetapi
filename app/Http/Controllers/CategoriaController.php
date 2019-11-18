<?php

namespace App\Http\Controllers;

use App\Categoria;
use Validator;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compraproducto = Categoria::select('*');

        if ( isset($request->compra_id) ) {
            $compra_id = $request->compra_id;
            $compraproducto =  $compraproducto->where('compra_id', $compra_id);
        }

        $compraproducto = $compraproducto->orderBy('compra_id')->get();
        
        return response()->json(['data' => $compraproducto], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), Categoria::$rules);


        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            Categoria::create($request->all());
            return response()->json('Categoria creado', 200);    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $compraproducto = Categoria::select('*')->where('id',$id)->get();
        
        return response()->json(['data' => $compraproducto], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        die("Llega");

        
        $Categoria = Categoria::select('*')->where('id',$id)->get();
        
        $validator = Validator::make($request->all(), Categoria::$rulesUpdate);

        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            $Categoria::update($request->all());
            return response()->json('Categoria actualizado', 200);    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $productos)
    {
        //
    }
}
