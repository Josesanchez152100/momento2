<?php

namespace App\Controllers;
use App\Models\AnfitrionModel;
use App\Models\InvitadoModel;


class ReservaController extends BaseController
{
	public function index(){
        $request = \Config\Services::request();
        $apartamento = new AnfitrionModel();
        $id=$request->getGet("id");
        $apartamentos=$apartamento->obtenerApartamento($id);
        $datos = array(
            'infoApartamentos'=>$apartamentos
        );

      //  var_dump($datos);

		echo view('layout/header');
		echo view('reserva', $datos);
		echo view('layout/footer');
	}
    public function addReservas(){

        $request = \Config\Services::request();
        $reserva = new InvitadoModel();
        $id_usuario = session('id');
        $id_apartamento = $request->getGet('id');
        $fechaIni = $request->getPost('fechaIni');
        $fechaFin = $request->getPost('fechaFin');
        $nroDias = $request->getPost('nroDias');
        $estado = 1;

        if($fechaIni == "" || $fechaFin == "" || $nroDias == ""){
            echo "<h1>Debe ingresar las fechas y el numero de dias a Reservar</h1>";
        }else{
            $reserva->updateState($id_apartamento,$estado);
            $reserva->addReserva($id_usuario, $id_apartamento, $fechaIni, $fechaFin,$nroDias, $estado);
        }
		return redirect()->to('/public/invitado');
    }
public function cancelarReserva(){
    $request = \Config\Services::request();
    $reserva = new InvitadoModel();
    $id_apartamento = $request->getGet('id_a');
    $estado=0;
    $id_reserva = $request->getGet('id');
    $reserva->updateState($id_apartamento,$estado);
    $reserva->changeState($id_reserva,$estado);
    return redirect()->to('/public/historial');
  //  $reserva=$reserva->getGet(id);

}
public function historial(){
    $request = \Config\Services::request();
    $reserva = new InvitadoModel();
    $datos = array(
        'historial'=>$reserva->leerDatosReserva()
    );
  //  echo view('layout/header');
    echo view('reservaInvitado', $datos);
    echo view('layout/footer');
}

}