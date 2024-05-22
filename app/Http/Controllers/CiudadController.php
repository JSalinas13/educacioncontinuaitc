<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);
    }
    public function show($id)
    {
        $ciudad = Ciudad::find($id);
        return response()->json($ciudad);
    }

    public function store(Request $request)
    {
        $ciudad = new Ciudad();
        $ciudad->ciudad = $request->input('ciudad');
        $ciudad->estado_id = $request->input('estado_id');
        $ciudad->save();
        return response()->json($ciudad, 201);
    }


    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->ciudad = $request->input('ciudad');
        $ciudad->estado_id = $request->input('estado_id');
        $ciudad->save();
        return response()->json($ciudad);
    }

    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return response()->json(null, 204);
    }
}
