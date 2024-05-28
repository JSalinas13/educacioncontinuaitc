<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
    //
    public function index()
    {
        $estados = Estado::all();
        return response()->json($estados);
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        return response()->json($estado);
    }

    public function store(Request $request)
    {
        $estado = new Estado();
        $estado->estado = $request->input('estado');
        $estado->pais = $request->input('pais');
        $estado->save();
        return response()->json($estado, 201);
    }


    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);
        $estado->estado = $request->input('estado');
        $estado->pais = $request->input('pais');
        $estado->save();
        return response()->json($estado);
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return response()->json(null, 204);
    }
}