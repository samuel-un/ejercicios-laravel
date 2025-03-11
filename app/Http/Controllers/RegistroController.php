<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email',
            'telefono' => 'nullable|digits:9',
            'contraseña' => 'required|string|min:6|confirmed',
            'edad' => 'required|integer|min:18',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'codigo_postal' => 'required|digits:5',
        ]);

        return redirect()->route('home')->with('success', 'Registro exitoso');
    }
}