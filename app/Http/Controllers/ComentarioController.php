<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::all(); // Cambio de Localidad a Comentario
        return response()->json($comentarios);
    }

    public function show($id)
    {
        $comentario = Comentario::find($id); // Cambio de Localidad a Comentario
        return response()->json($comentario);
    }

    public function store(Request $request)
    {
        $comentario = new Comentario(); // Cambio de Localidad a Comentario
        $comentario->comentario = $request->input('comentario'); // Cambio de localidad a comentario
        $comentario->fecha_comento = $request->input('fecha_comento'); // Cambio de localidad a comentario
        $comentario->save();
        return response()->json($comentario, 201);
    }

    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id); // Cambio de Localidad a Comentario
        $comentario->comentario = $request->input('comentario'); // Cambio de localidad a comentario
        $comentario->fecha_comento = $request->input('fecha_comento'); // Cambio de localidad a comentario
        $comentario->save();
        return response()->json($comentario);
    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id); // Cambio de Localidad a Comentario
        $comentario->delete();
        return response()->json(null, 204);
    }
}
