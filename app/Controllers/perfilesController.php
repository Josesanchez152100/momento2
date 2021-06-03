<?php

namespace App\Controllers;
Use App\Models\PerfilesModel;

class PerfilesController extends BaseController
{
	public function index()
	{
		$usuario = new PerfilesModel();
		$usuario -> readUsuario();
		$leeUsuario = $usuario->readUsuario();
		   $datos = array(
			"usuarios" => $leeUsuario,
		   );

		echo view('layout/header');
		echo view('perfiles', $datos);
		echo view('layout/footer');
	}
	public function deleteUsuario(){
		$usuario = new PerfilesModel();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$usuario->deleteUsuario($id);
		return redirect()->to('/public/perfiles');
	
	}





}