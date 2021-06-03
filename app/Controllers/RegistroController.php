<?php

namespace App\Controllers;
use App\Models\RegistroModel;

class RegistroController extends BaseController
{
	public function index(){
	
		echo view('layout/header');
		echo view('registro');
		echo view('layout/footer');
	}
	public function addUsuario(){
		$request = \Config\Services::request();
	    $usuario = new RegistroModel();
		$nombre = $request->getPost('nombre');
		$apellido = $request->getPost('apellido');
		$ciudad = $request->getPost('ciudad');
		$pais = $request->getPost('pais');
		$correo = $request->getPost('correo');
		$clave = $request->getPost('clave');
		$rol = $request->getPost('rol');
		$descripcion = $request->getPost('descripcion');
	    $usuario -> addUsuario($nombre, $apellido, $ciudad, $pais, $correo, $clave, $rol, $descripcion);
		return redirect()->to('/public/login');
	
	}
	public function updateUsuario(){
		$usuario = new RegistroModel();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$usuario = $usuario->getUsuario($id);
		echo view('layout/header');
		echo view('update_registro', array("usuario" => $usuario[0]));
		echo view('layout/footer');
	
	}				
	public function updateRegistroUsuario(){
		$request = \Config\Services::request();
		$usuario = new RegistroModel();
		$nombre = $request->getPost('nombre');
		$apellido = $request->getPost('apellido');
		$ciudad = $request->getPost('ciudad');
		$pais =  $request->getPost('pais');
		$rol = $request->getPost('rol');
		$descripcion = $request->getPost('descripcion');
		$id = $request->getGet('id');
		$usuario -> updateRegistroUsuario($id, $nombre, $apellido, $ciudad, $pais, $rol, $descripcion);
		return redirect()->to('/public/perfiles');
	}



}
