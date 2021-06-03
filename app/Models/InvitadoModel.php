<?php 
namespace App\Models;

use CodeIgniter\Model;

class InvitadoModel extends Model{

 
function leerDatosUsu(){
   $sql= "SELECT * FROM usuarios";
   $apartamento = $this->db->query($sql);
   return $apartamento->getResult();
}

function addReserva($id_usuario, $id_apartamento, $fechaIni, $fechaFin, $nroDias, $estado){
    $sql= "INSERT INTO reservas (id_usuario, id_apartamento, fechaIni, fechaFin, nroDias, estado)
            VALUES ('{$id_usuario}','{$id_apartamento}','{$fechaIni}','{$fechaFin}','{$nroDias}','{$estado}')";
               $this->db->query($sql);

}
function updateState($id, $estado){
    $sql= "UPDATE apartamentos SET estado='{$estado}' WHERE id={$id}";
    $this->db->query($sql);
}

function changeState($id, $estado){
    $sql= "UPDATE reservas SET estado='{$estado}' WHERE id={$id}";
    $this->db->query($sql);
}

function leerDatosReserva(){
    $sql= "SELECT * FROM apartamentos INNER JOIN reservas ON apartamentos.id=reservas.id_apartamento";
    $apartamento = $this->db->query($sql);
    return $apartamento->getResult();
 }