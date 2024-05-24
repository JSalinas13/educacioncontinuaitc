<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoUsuarioController extends Controller
{
    public function crear(Request $request)
    {
        $nuevoContactoUsuario = ContactoUsuario::create([
            'id_usuario' => $request->input('id_usuario'),
            'id_contacto' => $request->input('id_contacto')
        ]);

        return "ContactoUsuario creado exitosamente.";
    }

    public function buscarPorId($id_usuario, $id_contacto)
    {
        $contactoUsuario = ContactoUsuario::where('id_usuario', $id_usuario)
            ->where('id_contacto', $id_contacto)
            ->first();

        if ($contactoUsuario) {
            echo "ID Usuario: {$contactoUsuario->id_usuario}, ID Contacto: {$contactoUsuario->id_contacto}\n";
        } else {
            echo "ContactoUsuario no encontrado.\n";
        }
    }

    public function mostrar()
    {
        $contactosUsuarios = ContactoUsuario::all();
        foreach ($contactosUsuarios as $contactoUsuario) {
            echo "ID Usuario: {$contactoUsuario->id_usuario}, ID Contacto: {$contactoUsuario->id_contacto}\n";
        }
    }

    public function actualizar(Request $request, $id_usuario, $id_contacto)
    {
        $contactoUsuario = ContactoUsuario::where('id_usuario', $id_usuario)
            ->where('id_contacto', $id_contacto)
            ->first();

        if ($contactoUsuario) {
            $contactoUsuario->update([
                'id_usuario' => $request->input('id_usuario'),
                'id_contacto' => $request->input('id_contacto')
            ]);

            return "ContactoUsuario actualizado exitosamente.";
        } else {
            return "ContactoUsuario no encontrado.";
        }
    }

    public function eliminar($id_usuario, $id_contacto)
    {
        $contactoUsuario = ContactoUsuario::where('id_usuario', $id_usuario)
            ->where('id_contacto', $id_contacto)
            ->first();

        if ($contactoUsuario) {
            $contactoUsuario->delete();
            return "ContactoUsuario eliminado exitosamente.";
        } else {
            return "ContactoUsuario no encontrado.";
        }
    }
}
