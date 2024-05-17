<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Repositories\Usuario\CursosRepository;

class MisCursosController extends Controller
{
    private $cursosRepository;
    public function __construct(CursosRepository $cursosRepository)
    {
        $this->cursosRepository = $cursosRepository;
    }
    /**
     * Método para obtener todos mis cursos
     */
    public function index()
    {
        //Temporalmente hasta que haya un LOGIN

        $idAut = 2;
        /**
         * IMPORTANTE DEBIDO A QUE NO HAY SESION LOS MENSAJES DE MANERA DE OTRA MANERA PROVICIONAL
         *
         */
        $data = [];
        if (is_numeric($idAut)) {
            $data['persona'] = $this->cursosRepository->getUser($idAut);
            if ($data['persona']) {
                $data['MisCursos']=$this->cursosRepository->getCursosActivos($idAut);
                $data['MisCursosAPagar']=$this->cursosRepository->getCursosSinPagar($idAut);
                return view('usuario.my_courses',compact('data'));
            }
            //Segun es login temporal
            return $this->cursosRepository->respSession('Error', 'danger', 'login');
        }
        //Segun es login temporal
        return $this->cursosRepository->respSession('Error', 'danger', 'login');
    }

    public function getCurso($idCurso){
        //Temporalmente hasta que haya un LOGIN
        $idAut = 2;
        /**
         * IMPORTANTE DEBIDO A QUE NO HAY SESION LOS MENSAJES DE MANERA DE OTRA MANERA PROVICIONAL
         *
         */
        if (is_numeric($idAut)) {
            if(is_numeric($idCurso)){
                $persona = $this->cursosRepository->getUser($idAut);
                if($persona){
                    $curso=$this->cursosRepository->getCurso($idAut,$idCurso);
                    if($curso){
                        return view('usuario.detail_course',compact('curso'));
                    }
                }
            }
        }
        //Segun es login temporal
        return $this->cursosRepository->respSession('Error', 'danger', 'login');

    }
}
