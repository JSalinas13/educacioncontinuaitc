<?php

namespace App\Http\Controllers;

use App\Models\Curso;

/**
 * @author Luis Gerardo López Ruiz
 * @author Sandra Paola Gutierrez Marcial
 */

use Illuminate\Support\Facades\DB;

class CursoEstudianteController extends Controller
{

    public function mycourse()
    {
        //De manera temporal por falta de login
        $mycourse = DB::table('cursos as c')
            ->join('usuarios as u', 'u.id', '=', 'c.instructor_id')
            ->select('c.*', 'u.nombre',)
            ->get();
        return view('myCourses', compact('mycourse'));
    }
}
