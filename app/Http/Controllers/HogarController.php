<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use Illuminate\Http\Request;

class HogarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hogar = Hogar::all();

        return response()->json([
           'hogar'=>$hogar,
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
        $request->validate([
            'nombre'=>'required|max:200|string',
            'ubicacion'=>'required'
        ]);

        $hogar = Hogar::create($request->all());

        return response()->json([
           'hogar'=>$hogar,
           'mensaje'=>'ok'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function show(Hogar $hogar)

    {
        return response()->json([
            'hogar'=>$hogar,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hogar $hogar)
    {
        $hogar->update($request->all());

        return response()->json([
            'hogar'=>$hogar,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hogar $hogar)
    {
        $hogar->delete();
        return response()->json([
            'mensaje'=>'ok'
        ]);
    }
}
