<?php

namespace App\Http\Controllers;

use App\Models\Itinerario;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itinerario = Itinerario::all();

        return response()->json([
            'itinerario'=>$itinerario,
            'mensaje'=>'ok'
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function show(Itinerario $itinerario)
    {
        return response()->json([
            'itinerario'=>$itinerario,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itinerario $itinerario)
    {
        $itinerario->update($request->all());

        return response()->json([
            'itinerario'=>$itinerario,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itinerario $itinerario)
    {
        $itinerario->delete();

        return response()->json([
            'mensaje'=>'ok'
        ]);
    }
}
