<?php

namespace App\Repositories\Usuario;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class CursosRepository
{

    public function getUser($id){
        return Usuario::where('id',$id)->first();
    }

    /**
     * Método para mensajes sin session
     */
    public function respSession($message, $type = "success",$routeName)
    {
        return redirect()->route($routeName);
    }

    public function getCursosActivos($id){
        return DB::table('usuarios as u')
        ->join('cursosestudiantes as ce','ce.estudiante_id','=','u.id')
        ->join('cursos as c','ce.curso_id','=','c.id')
        ->select('c.*')
        ->where('ce.estatus_pago',true)
        ->where('u.id',$id)
        ->get();
    }

    public function getCursosSinPagar($id){
        return DB::table('usuarios as u')
        ->join('cursosestudiantes as ce','ce.estudiante_id','=','u.id')
        ->join('cursos as c','ce.curso_id','=','c.id')
        ->where('ce.estatus_pago',false)
        ->where('u.id',$id)
        ->get();
    }


}
