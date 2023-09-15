<?php

namespace App\Http\Controllers;

use App\Models\Dispensador;
use Illuminate\Http\Request;

class DispensadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispensador = Dispensador::all();

        return response()->json([
           'dispensador' => $dispensador,
           'mensaje'=> 'ok'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IP' => 'required',
            'MacAddress' => 'required',
            'nombre' => 'required|max:25|string',
            'estado' => 'required',
            'id_usuario' => 'required',
            'estado' => 'required'
        ]);

        $dispensador = Dispensador::create($request->all());

        return response()->json([
           'dispensador'=>$dispensador,
           'mensaje'=>'ok'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispensador  $dispensador
     * @return \Illuminate\Http\Response
     */
    public function show($id_dispensador)
    {
        $dispensador = Dispensador::where('id',$id_dispensador)->first();

        // Verificar si el dispensador existe
        if (!$dispensador) {
            return response()->json(['error' => 'Dispensador no encontrado'], 404);
        }

        return response()->json([
            'dispensador'=>$dispensador,
            'mensaje'=>'ok'
        ]);
    }

    public function dispensadoresDelUsuario($id_usuario)
    {
        $dispensadores = Dispensador::where('id_usuario', $id_usuario)->get();

        // Verificar si se encontraron dispensadores
        if ($dispensadores->isEmpty()) {
            return response()->json(['error' => 'No se encontraron dispensadores'], 404);
        }

        return response()->json([
            'dispensador'=>$dispensadores,
            'mensaje'=>'ok'
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dispensador  $dispensador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispensador $dispensador)
    {
        $dispensador->update($request->all());

        return response()->json([
            'dispensador'=>$dispensador,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispensador  $dispensador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispensador $dispensador)
    {
        $dispensador->delete();

        return response()->json([
            'mensaje'=>'ok'
        ]);
    }
}
