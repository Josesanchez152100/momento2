<?php

namespace App\Controllers;
use App\Models\HomeModel;
use App\Models\AnfitrionModel;
use PhpParser\Node\Expr\Print_;

class Home extends BaseController
{
	public function index()
	{
		$apartamentos = new AnfitrionModel();
		$request = \Config\Services::request();
		$apart=$apartamentos->leerApartamento();
		$fechaIni= date(2000-01-01);
		$fechaFin= date(2050-01-01);
		$datos = array(
			"apartamentos"=>$apart,
			'fechaIni' => $fechaIni,
			'fechaFin' => $fechaFin,
		);
		       echo view('layout/header');
				echo view('home', $datos);
				echo view('layout/footer');
	}

	public function filtarFecha()
{
	$request = \Config\Services::request();
	$apartamentos = new AnfitrionModel();
	$apart=$apartamentos->leerApartamento();
	$fechaIni=$request->getPost('fechaIni');
	$fechaFin=$request->getPost('fechaFin');

	if($fechaIni=="" || $fechaFin==""){
		echo "<h1 class='alerta'>Debe Seleccionar las fechas</h1>";
	}else{
		$datos2 = array(
			'fechaIni' => $fechaIni,
			'fechaFin' => $fechaFin,
			'apartamentos' => $apart
		);
		echo view('layout/header');
		echo view('home', $datos2);
		echo view('layout/footer');
	}
}
}

