<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivilegioRolController extends Controller
{
    function crearPrivilegioRol($id_privilegio, $id_rol) {
        PrivilegioRol::create(['id_privilegio' => $id_privilegio, 'id_rol' => $id_rol]);
        echo "PrivilegioRol creado exitosamente.\n";
    }
    
    function leerPrivilegiosRoles() {
        $privilegiosRoles = PrivilegioRol::all();
        foreach ($privilegiosRoles as $pr) {
            echo "ID Privilegio: {$pr->id_privilegio}, ID Rol: {$pr->id_rol}\n";
        }
    }
    
    function eliminarPrivilegioRol($id_privilegio, $id_rol) {
        $pr = PrivilegioRol::where('id_privilegio', $id_privilegio)->where('id_rol', $id_rol)->first();
        if ($pr) {
            $pr->delete();
            echo "PrivilegioRol eliminado exitosamente.\n";
        } else {
            echo "PrivilegioRol no encontrado.\n";
        }
    }
}
