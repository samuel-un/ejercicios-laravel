<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
	public function saludo($nombre){
		return view("usuarios.saludo", compact("nombre"));
	}

	public function create(){
		return view('usuarios.create');
	}

	public function store(Request $request){
		$nombre = $request->input('nombre');
		$email = $request->input('email');
		
		return "Nombre: $nombre, Email: $email";
	}

    public function index(){
		return "Listado de usuarios";
	}

	public function show($id){
		return "Detalles del usuario con ID: " . $id ;
	}
}