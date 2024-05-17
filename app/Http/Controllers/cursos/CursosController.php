<?php

namespace App\Http\Controllers\cursos;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Método para ir a los cursos
     */
    public function index(){
        $data=[];
        $data['cursos']= Curso::with(['tipoCurso','programas','usuario'])->get();
        return view('cursos.cursos',$data);
    }
}
