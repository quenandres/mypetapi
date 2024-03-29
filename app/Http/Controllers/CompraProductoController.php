<?php

namespace App\Http\Controllers;

use Validator;
use App\Tienda;
use App\Producto;
use App\CompraProducto;
use Illuminate\Http\Request;

class CompraProductoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compraproducto = CompraProducto::select('*');
        $compraproducto = $compraproducto->get();

        foreach ($compraproducto as $key => $value) {
            $empObj = new \stdClass();                

            $producto = Producto::select('nombre')->where('id', $value->producto_id)->first();
            $empObj->nombre = $producto->nombre;
            $empObj->cantidad = $value->cantidad;
            $empObj->valor = $value->valor;
            $response[] = $empObj;
        }
        
        return response()->json(['data' => $response], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $producto_id, $cantidad)
    {   
        $producto = Producto::select('precio')->where('id', $producto_id)->first();

        $valor = $producto['precio'] * $cantidad;
        
        $request->request->add(['valor' => $valor]);
        $request->request->add(['producto_id' => $producto_id]);
        $request->request->add(['cantidad' => $cantidad]);

        $validator = Validator::make($request->all(), CompraProducto::$rules);

        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            CompraProducto::create($request->all());
            return response()->json('CompraProducto creado', 200);    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompraProducto  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $compraproducto = CompraProducto::select('*')->where('id',$id)->get();
        
        return response()->json(['data' => $compraproducto], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompraProducto  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        die("Llega");

        
        $CompraProducto = CompraProducto::select('*')->where('id',$id)->get();
        
        $validator = Validator::make($request->all(), CompraProducto::$rulesUpdate);

        if (count($validator->errors()->all()) > 0) {

            return response()->json([
                'message' => 'Error de validación de datos',
                'errors' => $validator->errors()->all()
            ], 422);

        } else {
            $CompraProducto::update($request->all());
            return response()->json('CompraProducto actualizado', 200);    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompraProducto  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompraProducto $productos)
    {
        //
    }
}
