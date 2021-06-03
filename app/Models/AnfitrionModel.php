<?php 
namespace App\Models;

use CodeIgniter\Model;

class AnfitrionModel extends Model{

   function addApartamento($id_usuarios,$ciudad,$pais,$nombre,$ubicacion,$imagen,$descripcion,$fecha,$comodidades,$valor){
      $sql = "INSERT INTO apartamentos (id_usuarios,nombre,ubicacion,pais,ciudad,fecha,descripcion,comodidades,imagen,valor)
       VALUES ('{$id_usuarios}','{$nombre}','{$ubicacion}','{$pais}','{$ciudad}','{$fecha}','{$descripcion}','{$comodidades}','{$imagen}','{$valor}')";
      $this->db->query($sql);
  }
function leerApartamento(){
   $sql= "SELECT * FROM apartamentos";
   $apartamento = $this->db->query($sql);
   return $apartamento->getResult();
}

function deleteApartamento($id){

   $sql= "DELETE FROM apartamentos WHERE id={$id}";
   $this->db->query($sql);
}

function updateApartamento($id,$ciudad,$pais,$nombre,$ubicacion,$imagen,$descripcion,$fecha,$comodidades,$valor){
   $sql = "UPDATE apartamentos set nombre='{$nombre}', ubicacion='{$ubicacion}', pais='{$pais}',  ciudad='{$ciudad}', 
 fecha='{$fecha}', descripcion='{$descripcion}' , comodidades='{$comodidades}' , imagen='{$imagen}' , valor='{$valor}' WHERE id={$id}";
   $this->db->query($sql);
}

function obtenerApartamento($id){
   $sql= "SELECT * FROM apartamentos WHERE id={$id}";
   $apartamento = $this->db->query($sql);
   return $apartamento->getResult();

}
    
}