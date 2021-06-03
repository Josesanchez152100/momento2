<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilesModel extends Model
{

	function readUsuario(){
		$sql = "SELECT * FROM usuarios";
		$usuario = $this->db->query($sql);
	     return($usuario ->getResult());
		}

	function deleteUsuario($id){
		$sql ="DELETE FROM usuarios WHERE id={$id}";
		$this->db->query($sql);
	 }


}