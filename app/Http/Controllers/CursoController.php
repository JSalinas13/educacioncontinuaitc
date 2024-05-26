<?php

/**
 * @author Luis Gerardo López Ruiz
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cursos()
    {
        $data = [];
        $data['categorias'] = DB::table('tiposcursos as tc')
            ->leftJoin('cursos as c', 'tc.id', '=', 'c.tipo_id')
            ->select('tc.tipo_curso', DB::raw('COUNT(c.id) as total_cursos'))
            ->groupBy('tc.tipo_curso')
            ->get();
            $data['cursos'] = DB::table('cursos as c')
            ->leftJoin('cursosestudiantes as ce', 'c.id', '=', 'ce.curso_id')
            ->join('usuarios as u','u.id','=','c.instructor_id')
            ->select('c.*','u.*', DB::raw('COUNT(ce.estudiante_id) as total_estudiantes'))
            ->groupBy('c.id','u.id')
            ->get();
        return view('courses', $data);
    }
}
