<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privilegio;

class PrivilegioController extends Controller
{
    function crearPrivilegio($privilegio) {
        Privilegio::create(['privilegio' => $privilegio]);
        echo "Privilegio creado exitosamente.\n";
    }
    
    function leerPrivilegios() {
        $privilegios = Privilegio::all();
        foreach ($privilegios as $privilegio) {
            echo "ID: {$privilegio->id_privilegio}, Privilegio: {$privilegio->privilegio}\n";
        }
    }
    
    function actualizarPrivilegio($id, $nuevoPrivilegio) {
        $privilegio = Privilegio::find($id);
        if ($privilegio) {
            $privilegio->privilegio = $nuevoPrivilegio;
            $privilegio->save();
            echo "Privilegio actualizado exitosamente.\n";
        } else {
            echo "Privilegio no encontrado.\n";
        }
    }
    
    function eliminarPrivilegio($id) {
        $privilegio = Privilegio::find($id);
        if ($privilegio) {
            $privilegio->delete();
            echo "Privilegio eliminado exitosamente.\n";
        } else {
            echo "Privilegio no encontrado.\n";
        }
    }
}
