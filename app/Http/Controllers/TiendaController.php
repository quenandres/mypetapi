<?php

namespace App\Http\Controllers;

use App\Tienda;
use Validator;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Tienda::select('*');

        if ( isset($request->nombre) ) {
            $nombre = $request->nombre;
            $productos =  $productos->where('nombre', $nombre);
        }

        if ( isset($request->categoria) ) {
            $categoria = $request->categoria;
            $productos =  $productos->where('categoria', $categoria);
        }

        $productos = $productos->orderBy('nombre')->get();
        
        return response()->json(['data' => $productos], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), Tienda::$rules);


        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            Tienda::create($request->all());
            return response()->json('Tienda creado', 200);    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tienda  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $productos = Tienda::select('*')->where('id',$id)->get();
        
        return response()->json(['data' => $productos], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tienda  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        die("Llega");

        
        $Tienda = Tienda::select('*')->where('id',$id)->get();
        
        $validator = Validator::make($request->all(), Tienda::$rulesUpdate);

        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            $Tienda::update($request->all());
            return response()->json('Tienda actualizado', 200);    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tienda  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tienda $productos)
    {
        //
    }
}
