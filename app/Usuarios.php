<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['email','password','nombres','apellidos','id_sexo','id_documento','nro_documento','celular','telefono','fec_nac','id_region','id_provincia','id_distrito'];
}
