<?php

namespace App\Http\Controllers;

use App\Compra;
use Validator;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Compra::select('*');

        if ( isset($request->user_id) ) {
            $user_id = $request->user_id;
            $productos =  $productos->where('user_id', $user_id);
        }

        if ( isset($request->tienda_id) ) {
            $tienda_id = $request->tienda_id;
            $productos =  $productos->where('tienda_id', $tienda_id);
        }

        $productos = $productos->orderBy('user_id')->get();
        
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
        $validator = Validator::make($request->all(), Compra::$rules);


        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            Compra::create($request->all());
            return response()->json('Compra creado', 200);    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $productos = Compra::select('*')->where('id',$id)->get();
        
        return response()->json(['data' => $productos], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        die("Llega");

        
        $Compra = Compra::select('*')->where('id',$id)->get();
        
        $validator = Validator::make($request->all(), Compra::$rulesUpdate);

        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            $Compra::update($request->all());
            return response()->json('Compra actualizado', 200);    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $productos)
    {
        //
    }
}
