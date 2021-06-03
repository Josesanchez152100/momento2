<?php

namespace App\Controllers;

use App\Models\LoginModel;

class LoginController extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('login');
		echo view('layout/footer');
	}

	public function login()
	{
		$request = \Config\Services::request();
		$correo = $request->getPost('email');
		$clave = $request->getPost('password');
		$login = new loginModel();
		$datosLogin =  $login->getLogin();
		foreach ($datosLogin as $dato) {
			if ($correo == $dato->correo && $clave == $dato->clave) {
				//Si los datos coinciden me abre una session de dicho registro
				$dataUsuario = [
					"id" => $dato->id,
					"nombre" => $dato->nombre,
					"apellido" => $dato->apellido,
					"email" => $dato->correo,
					"ciudad" => $dato->ciudad,
					"pais" => $dato->pais,
					"descripcion" => $dato->descripcion,
					"rol" => $dato->rol
				];
				//var_dump($dataUsuario);
				
				$session =  session();
				$session->set($dataUsuario);
				return redirect()->to('/public/anfitrion');
			}else{
				//return redirect()->to('/public/login');
							
			
			}
			
		}
	}
}