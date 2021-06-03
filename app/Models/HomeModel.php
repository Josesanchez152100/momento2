<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function leerApartamento(){
        $sql= "SELECT * FROM apartamentos";
        $apartamento = $this->db->query($sql);
        return $apartamento->getResult();
     }
 } 