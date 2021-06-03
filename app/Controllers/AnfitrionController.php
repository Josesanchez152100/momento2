<?php

namespace App\Controllers;

use App\Models\AnfitrionModel;

class AnfitrionController extends BaseController
{

	public function index()
	{
		$apartamento = new AnfitrionModel();
		$apartamentos=$apartamento->leerApartamento();
		$datos= array(
			"infoApartamentos"=>$apartamentos
		);
		if (session('rol') == 'Anfitrion') {
			echo view('anfitrion', $datos);
			echo view('layout/footer');
		} else if(session('rol') == 'Invitado'){
			return redirect()->to('/public/invitado');
		}else{
			return redirect()->to(base_url('/public/home'));
		}
	}
	public function salir()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/public/login'));
	}

	public function crearApartamento(){
		$request = \Config\Services::request();
		$nombre = $request->getPost('nombre');
		$id_usuarios = session('id');
		$ubicacion = $request->getPost('ubicacion');
		$descripcion = $request->getPost('descrip');
		$comodidades = $request->getPost('comod');
		$pais = $request->getPost('pais');
		$ciudad = $request->getPost('ciudad');
		$fecha = $request->getPost('fecha');
		$imagen = $request->getPost('dirUrl');
		$valor = $request->getPost('valor');

	 	if ($nombre == "" || $ubicacion == "" || $descripcion =="" || $comodidades =="" || $pais =="" || $ciudad =="" || $imagen == "" || $valor == ""){
	 		echo "<h1>Todos los campos deben ser diligenciados</h1>";
	    }Else{	

		$inserApartamento= new AnfitrionModel();
		$inserApartamento->addApartamento($id_usuarios,$ciudad,$pais,$nombre,$ubicacion,$imagen,$descripcion,$fecha,$comodidades,$valor);
		return redirect()->to('/public/anfitrion');
	   };
	   
	}
public function eliminarApartamento(){
	$anfitrionApart = new AnfitrionModel();
	$request = \Config\Services::request();
	$id = $request->getGet('id');
	$anfitrionApart->deleteApartamento($id);
	return redirect()->to('/public/anfitrion');

}

public function ActualizarApartamento(){
	$apartamentos = new AnfitrionModel();
	$request = \Config\Services::request();
	$id = $request->getGet('id');
	$apart=$apartamentos->obtenerApartamento($id);
	$datos = array(
		"apartamentos"=>$apart
	);
			echo view('update_Apartamento', $datos);
			echo view('layout/footer');

}

public function ActualizarformApartamento(){

	$request = \Config\Services::request();
	$apartamento = new AnfitrionModel();
	$nombre = $request->getPost('nombre');
	$ubicacion = $request->getPost('ubicacion');
	$descripcion = $request->getPost('descrip');
	$comodidades = $request->getPost('comodn');
	$pais = $request->getPost('pais');
	$ciudad = $request->getPost('ciudad');
	$fecha = $request->getPost('fecha');
	$imagen = $request->getPost('dirUrl');
	$valor = $request->getPost('valor');
	$id = $request->getGet('id');
	$apartamento -> updateApartamento($id,$ciudad,$pais,$nombre,$ubicacion,$imagen,$descripcion,$fecha,$comodidades,$valor);
	return redirect()->to('/public/anfitrion');
	}

}