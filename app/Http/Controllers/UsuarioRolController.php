<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioRol;

class UsuarioRolController extends Controller
{
    function crearUsuarioRol($id_usuario, $id_rol) {
        UsuarioRol::create(['id_usuario' => $id_usuario, 'id_rol' => $id_rol]);
        echo "UsuarioRol creado exitosamente.\n";
    }
    
    function leerUsuariosRoles() {
        $usuariosRoles = UsuarioRol::all();
        foreach ($usuariosRoles as $ur) {
            echo "ID Usuario: {$ur->id_usuario}, ID Rol: {$ur->id_rol}\n";
        }
    }
    
    function eliminarUsuarioRol($id_usuario, $id_rol) {
        $ur = UsuarioRol::where('id_usuario', $id_usuario)->where('id_rol', $id_rol)->first();
        if ($ur) {
            $ur->delete();
            echo "UsuarioRol eliminado exitosamente.\n";
        } else {
            echo "UsuarioRol no encontrado.\n";
        }
    }
}
