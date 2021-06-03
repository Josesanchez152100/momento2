<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
  function addUsuario($nombre, $apellido, $ciudad, $pais, $correo, $clave, $rol, $descripcion){

    $sql = "INSERT INTO usuarios (nombre, apellido, ciudad, pais, correo, clave, rol, descripcion)
    VALUES ('{$nombre}','{$apellido}','{$ciudad}','{$pais}','{$correo}','{$clave}','{$rol}','{$descripcion}')";
    $this->db->query($sql);
  }
  function getUsuario($id){
    $sql = "SELECT * FROM usuarios WHERE id={$id}";
    $usuario = $this->db->query($sql);
    return $usuario->getResult();
 }

  function updateRegistroUsuario($id, $nombre, $apellido, $ciudad, $pais, $rol, $descripcion){
		$sql = "UPDATE usuarios set nombre='{$nombre}', apellido='{$apellido}', ciudad='{$ciudad}', pais='{$pais}', 
    rol='{$rol}', descripcion='{$descripcion}' WHERE id={$id}";
		$this->db->query($sql);
	}


 }