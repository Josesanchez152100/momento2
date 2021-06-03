<?php

namespace App\Controllers;

use App\Models\AnfitrionModel;
use App\Models\loginModel;

class InvitadoController extends BaseController
{

	public function index()
	{
        $apartamento = new AnfitrionModel();
        $apartamentos=$apartamento->leerApartamento();
		$datos= array(
			"apartamentos"=>$apartamentos
		);
      //  var_dump($datos);
			echo view('invitado', $datos);
			echo view('layout/footer');
		}
	
	public function salir()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/public/login'));
	}
    
   

}    