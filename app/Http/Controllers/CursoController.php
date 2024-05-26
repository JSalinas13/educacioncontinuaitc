<?php

/**
 * @author Luis Gerardo López Ruiz
 * @author Sandra Paola Gutierrez Marcial
 */

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cursos()
    {
        $data = [];
        $data['categorias'] = DB::table('tiposcursos as tc')
            ->leftJoin('cursos as c', 'tc.id', '=', 'c.tipo_id')
            ->select('tc.tipo_curso', 'tc.id',DB::raw('COUNT(c.id) as total_cursos'))
            ->groupBy('tc.tipo_curso','tc.id')
            ->get();
        $data['cursos'] = DB::table('cursos as c')
            ->leftJoin('cursosestudiantes as ce', 'c.id', '=', 'ce.curso_id')
            ->join('usuarios as u','u.id','=','c.instructor_id')
            ->select('c.*','u.nombre', DB::raw('COUNT(ce.estudiante_id) as total_estudiantes'))
            ->groupBy('c.id','u.nombre')
            ->get();
        $data['comentarios']= Comentario::with(['usuario'])->get();
        return view('courses', $data);
    }

    public function detail(){
        if($_POST){
            if(!is_numeric($_POST['id'])){
                return redirect()->route('cursos');
            }
            $curso = DB::table('cursos as c')
            ->leftJoin('cursosestudiantes as ce', 'c.id', '=', 'ce.curso_id')
            ->join('usuarios as u','u.id','=','c.instructor_id')
            ->select('c.*', 'u.nombre', DB::raw('COUNT(ce.estudiante_id) as total_estudiantes'))
            ->where('c.id',$_POST['id'])
            ->groupBy('c.id', 'u.nombre')
            ->first();

            if($curso){
                $detalleInstructor = null;
                if($curso->instructor_id){
                    $detalleInstructor= Usuario::where('id',$curso->instructor_id)->first();
                }
                return view('detailCourses',compact('curso','detalleInstructor'));
            }
            return redirect()->route('cursos');
        }
        return redirect()->route('cursos');
    }

    public function categoriaCurso(){
        if($_POST){
            if(!is_numeric($_POST['id'])){
                return redirect()->route('cursos');
            }
            $cursos = DB::table('cursos as c')
            ->leftJoin('cursosestudiantes as ce', 'c.id', '=', 'ce.curso_id')
            ->join('usuarios as u','u.id','=','c.instructor_id')
            ->select('c.*', 'u.nombre', DB::raw('COUNT(ce.estudiante_id) as total_estudiantes'))
            ->where('c.tipo_id',$_POST['id'])
            ->groupBy('c.id', 'u.nombre')
            ->get();

            if($cursos){
                return view('coursesCategories',compact('cursos'));
            }
            return redirect()->route('cursos');
        }
        return redirect()->route('cursos');
    }
}
