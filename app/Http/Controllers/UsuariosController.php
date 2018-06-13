<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use DB;
use Storage;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $documentos = $this->obtenerTipoDocumento();
        $sexos = $this->obtenerSexos();
        $regiones = $this->obtenerRegiones();
        $provincias = $this->obtenerProvincias();
        $distritos = $this->obtenerDistritos();
        $usuarios = DB::table('usuarios')
        ->join('sexo','sexo.id_sexo','=','usuarios.id_sexo')
        ->join('tipo_documentos','tipo_documentos.id_tipo_doc','=','usuarios.id_documento')
        ->join('regiones','regiones.id_region','=','usuarios.id_region')
        ->join('provincias','provincias.id_provincia','=','usuarios.id_provincia')
        ->join('distritos','distritos.id_distrito','=','usuarios.id_distrito')
        ->select('usuarios.id_usuario','usuarios.email','usuarios.nombres','usuarios.apellidos','usuarios.fec_nac','sexo.sexo','tipo_documentos.nom_corto as dni_doc','usuarios.nro_documento','usuarios.celular','usuarios.telefono','usuarios.created_at','regiones.name as region','provincias.name as provincia','distritos.name as distrito')
        ->where('usuarios.estado','=',0)
        ->orderBy('usuarios.id_usuario','desc')
        ->paginate(20);
        return view('admin.usuarios.index', ['usuarios' => $usuarios,'documentos' => $documentos,'sexos' => $sexos,'regiones' => $regiones, 'provincias' => $provincias, 'distritos' => $distritos]); 
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            $usuarios = new Usuarios();
              $usuarios->email = $request->email;
              $usuarios->password = $request->password;
              $usuarios->nombres = $request->nombres;
              $usuarios->apellidos = $request->apellidos;
              $usuarios->id_sexo = $request->id_sexo;
              $usuarios->id_documento = $request->id_documento;
              $usuarios->nro_documento = $request->nro_documento;
              $usuarios->celular = $request->celular;
              $usuarios->telefono = $request->telefono;
              $usuarios->fec_nac = $request->fec_nac;
              $usuarios->id_region = $request->id_region;
              $usuarios->id_provincia = $request->id_provincia;
              $usuarios->id_distrito = $request->id_distrito;
              $usuarios->save();  
              return Redirect::back()->with('ok','El usuario fué creado correctamente, estos son sus datos:</br>
              <b>Email: </b>'.$request->email.'</br>
              <b>Password: </b>'.$request->password.'</br>
              ** No olvide que el usuario debe completar su información personal **
              ');
          }
          catch(\Exception $e)
          {
            return back();
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $detalle_usuario = Usuarios::find($request->id);
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
    public function destroy(Request $request)
    {
        try
        {
            $nom_usuario = Usuarios::find($request->id);
            $usuario = Usuarios::findOrFail($request->id);
            /**/
            Usuarios::where('id_usuario', $request->id)
            ->update(['estado' => 1,'deleted_at' => now()]);
            /**/
            Storage::append('file.txt', '\n se elimino');
            return Redirect::back()->with('ok','El usuario <b>'.$usuario->nombres.' '.$usuario->apellidos.'</b> fué eliminado correctamente.');
        }
        catch(\Exception $e)
        {
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
