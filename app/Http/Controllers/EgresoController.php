<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Egreso;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Egreso::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $egreso = new Egreso;
        $egreso->tipo_eg = $request->input('tipo');
        $egreso->nombre_eg = $request->input('nombre');
        $egreso->costo_eg = $request->input('costo');
        $egreso->id_ingreso = $request->input('id_ingreso');
        $egreso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Egreso::findOrFail($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $egreso = Egreso::findOrFail($request->id);
        $egreso->tipo_eg = $request->tipo_eg;
        $egreso->nombre_eg = $request->nombre_eg;
        $egreso->costo_eg = $request->costo_eg;
        $egreso->id_ingreso = $request->id_ingreso;

        return $egreso;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $egreso = Egreso::destroy($request->id);
        return $egreso;
    }
}
