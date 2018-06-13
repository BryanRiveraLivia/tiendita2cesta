<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Usuarios;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function obtenerTipoDocumento()
    {
        $listar_documentos = DB::table('tipo_documentos')
        ->get();
        return $listar_documentos;
    }

    public function obtenerSexos()
    {
        $listar_sexos = DB::table('sexo')
        ->get();
        return $listar_sexos;
    }

    public function obtenerRegiones()
    {
        $listar_regiones = DB::table('regiones')
        ->where('estado','=','0')
        ->get();
        return $listar_regiones;
    }

    public function obtenerProvincias()
    {
        $listar_provincias = DB::table('provincias')
        ->where('estado','=','0')
        ->get();
        return $listar_provincias;
    }

    public function obtenerDistritos()
    {
        $listar_distritos = DB::table('distritos')
        ->where('estado','=','0')
        ->get();
        return $listar_distritos;
    }
}
