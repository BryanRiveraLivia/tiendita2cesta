<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('usuarios')
        ->join('sexo','sexo.id_sexo','=','usuarios.id_sexo')
        ->join('tipo_documentos','tipo_documentos.id_tipo_doc','=','usuarios.id_documento')
        ->join('regiones','regiones.id_region','=','usuarios.id_region')
        ->join('provincias','provincias.id_provincia','=','usuarios.id_provincia')
        ->join('distritos','distritos.id_distrito','=','usuarios.id_distrito')
        ->select('usuarios.email','usuarios.nombres','usuarios.apellidos','sexo.sexo','tipo_documentos.nom_corto as dni_doc','usuarios.nro_documento','usuarios.celular','usuarios.telefono','usuarios.created_at','regiones.name as region','provincias.name as provincia','distritos.name as distrito')
        ->get();

        return view('admin.usuarios.index', ['usuarios' => $usuarios]); 
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
