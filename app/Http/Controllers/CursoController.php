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
        $data['cursos'] = Curso::all();
        return view('courses', $data);
    }
}
