<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Muestra la vista de bienvenida con un mensaje.
     */
    public function bienvenida()
    {
        $mensaje = "Bienvenido a mi primera aplicación de Laravel";
        return view('bienvenida', compact('mensaje'));
    }

    /**
     * Muestra la vista de saludo con el nombre pasado en la ruta.
     */
    public function saludo($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
