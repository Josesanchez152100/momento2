<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
public function getLogin(){
	$sql = "SELECT * FROM usuarios";
	$usuarios = $this->db->query($sql);
	return $usuarios->getResult();
	 }

 }