<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascota = Mascota::all();

        return response()->json([
            'mascota'=>$mascota,
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
            'sexo' => 'required|',
            'altura' => 'required',
            'peso' => 'required',
            'fecha_nacimiento'=>'required',
            'imagen_mascota' => 'nullable'
        ]);

        $mascota = Mascota::create($request->all());

        return response()->json([
           'mascota'=>$mascota,
           'mensaje'=>'ok'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return response()->json([
            'mascota'=>$mascota,
            'mensaje'=>'ok'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->all());

        return response()->json([
            'mascota'=>$mascota,
            'mensaje'=>'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return response()->json([
            'mensaje'=>'ok'
        ]);
    }
}
