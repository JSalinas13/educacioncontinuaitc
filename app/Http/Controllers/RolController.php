<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    function crearRol($rol) {
        Rol::create(['rol' => $rol]);
        echo "Rol creado exitosamente.\n";
    }
    
    function leerRoles() {
        $roles = Rol::all();
        foreach ($roles as $rol) {
            echo "ID: {$rol->id_rol}, Rol: {$rol->rol}\n";
        }
    }
    
    function actualizarRol($id, $nuevoRol) {
        $rol = Rol::find($id);
        if ($rol) {
            $rol->rol = $nuevoRol;
            $rol->save();
            echo "Rol actualizado exitosamente.\n";
        } else {
            echo "Rol no encontrado.\n";
        }
    }
    
    function eliminarRol($id) {
        $rol = Rol::find($id);
        if ($rol) {
            $rol->delete();
            echo "Rol eliminado exitosamente.\n";
        } else {
            echo "Rol no encontrado.\n";
        }
    }
}
