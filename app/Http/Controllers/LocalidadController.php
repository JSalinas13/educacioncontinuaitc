<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    public function index()
    {
        $localidades = Localidad::all();
        return response()->json($localidades );
    }
    public function show($id)
    {
        $localidad= Localidad::find($id);
        return response()->json($localidad);
    }

    public function store(Request $request)
    {
        $localidad = new Localidad();
        $localidad->localidad = $request->input('localidad');
        $localidad->ciudad_id = $request->input('ciudad_id');
        $localidad->save();
        return response()->json($localidad, 201);
    }


    public function update(Request $request, $id)
    {
        $localidad = Localidad::find($id);
        $localidad->localidad = $request->input('localidad');
        $localidad->ciudad_id = $request->input('ciudad_id');
        $localidad->save();
        return response()->json($localidad);
    }

    public function destroy($id)
    {
        $localidad= Localidad::find($id);
        $localidad->delete();
        return response()->json(null, 204);
    }
}
