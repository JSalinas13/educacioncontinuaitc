<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->correo = $request->input('correo');
        $usuario->curp = $request->input('curp');
        $usuario->imagen = $request->input('imagen');
        $usuario->rfc = $request->input('rfc');
        $usuario->expreriencia = $request->input('expreriencia');
        $usuario->sexo = $request->input('sexo');
        $usuario->discapacidades = $request->input('discapacidades');
        $usuario->alergias = $request->input('alergias');
        $usuario->usuario = $request->input('usuario');
        $usuario->contrasena = ($request->input('contrasena'));
        $usuario->localidad_id = $request->input('localidad_id');
        $usuario->save();
        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->correo = $request->input('correo');
        $usuario->curp = $request->input('curp');
        $usuario->imagen = $request->input('imagen');
        $usuario->rfc = $request->input('rfc');
        $usuario->expreriencia = $request->input('expreriencia');
        $usuario->sexo = $request->input('sexo');
        $usuario->discapacidades = $request->input('discapacidades');
        $usuario->alergias = $request->input('alergias');
        $usuario->nickname = $request->input('nickname');
        if ($request->has('contrasena')) {
            $usuario->contrasena = bcrypt($request->input('contrasena'));
        }
        $usuario->id_localidad = $request->input('id_localidad');
        $usuario->save();
        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
