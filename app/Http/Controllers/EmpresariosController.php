<?php

namespace App\Http\Controllers;

use App\Models\Empresarios;
use Illuminate\Http\Request;

class EmpresariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empresarios']= Empresarios::paginate(5);
        return view('empresarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empresarios.create');
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
        $checkbox_value = $request->activo ? 1 : 0;
        $datosEmpresario = request()->except('_token'); 
        Empresarios::insert($datosEmpresario);
        return response()->json($datosEmpresario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresarios  $empresarios
     * @return \Illuminate\Http\Response
     */
    public function show(Empresarios $empresarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresarios  $empresarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresarios $empresarios)
    {
        //
        return view ('empresarios.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresarios  $empresarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresarios $empresarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresarios  $empresarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empresarios::destroy($id);
        return redirect('empresarios');
    }
}
