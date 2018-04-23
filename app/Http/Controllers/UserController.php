<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		if(request()->has('empty')){
			$users = [];
		}else{
			$users = [
				'Joel', 'Ellie', 'Tess', 'Tommy', 'Bill'
			];
		}


/*		$title= 'Listado de usuarios';

		dd(compact('title', 'users'));

		return view('users', compact('title', 'users'));*/
		return view('users')
		->with('users', $users)
		->with('title', 'Listado de usuarios');

/*		return view('users')->with([
			'users' => $users,
			'title' => 'Listado de usuarios'
		]);*/

/*		return view('users',[
			'users' => $users,
			'title' => 'Listado de usuarios'
		]);*/
	}
    
   	public function show($id)
	{
		return "Mostrando detalle del usuario: {$id}";
	}

	public function create()
	{
		return "Crear nuevo usuario";
	}
}
