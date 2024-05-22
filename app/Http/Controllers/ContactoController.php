<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return response()->json($contactos);
    }

    public function show($id)
    {
        $contacto = Contacto::find($id);
        return response()->json($contacto);
    }

    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->telefono = $request->input('telefono');
        $contacto->correo = $request->input('correo');
        $contacto->save();
        return response()->json($contacto, 201);
    }

    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);
        $contacto->nombre = $request->input('nombre');
        $contacto->telefono = $request->input('telefono');
        $contacto->correo = $request->input('correo');
        $contacto->save();
        return response()->json($contacto);
    }

    public function destroy($id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();
        return response()->json(null, 204);
    }
}
