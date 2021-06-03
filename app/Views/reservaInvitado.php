<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LUGARES</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/lib/bootstrap.min.css">
  <script src="/lib/jquery-1.12.2.min.js"></script>
  <script src="/lib/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/footer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="<?php echo base_url(); ?>/public/assets/js/validaciones.js"></script>
</head>

<body class="bg-warning">


  <nav class="navbar navbar-dark bg-dark  text-light p-3">
    <div class="container-fluid">
      <a class="navbar-brand">
        <h3>LUGARES</h3>
      </a>
      <a class="navbar-brand btn btn-warning" href="<?php echo base_url(); ?>/public/invitado">Reservar Mas Apartamentos</a>
      <a class="navbar-brand btn btn-outline-warning" href="<?php echo base_url(); ?>/public/salir">Login Out</a>
    </div>

    <div class="jumbotron bg-dark ">
      <img src='../public/assets/img/eddy.png' width="146" height="106" class='rounded'>
      <h1 class="text-nowrap " name="nombre"><?php echo (session("nombre")) . " " . (session("apellido")); ?></h1>
      <h5 class="text-warning">
        <p name="descripcion"><?php echo (session("descripcion")); ?></p>
      </h5>
      <b class="text-muted">
        <p name="descripcion"><?php echo (session("email")); ?></p>
      </b>
    </div>
  </nav>


  <div class="container mt-5" style="background-color: silver;">
  <div class='row'>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Desde</th>
      <th scope="col">Hasta</th>
      <th scope="col">Cantidad de Dias</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
      <?php
    foreach ($historial as $datos){
        $ruta = base_url() . "/public/cancelarReserva?id_a={$datos->id_apartamento}&&id={$datos->id}";
        if($datos->estado == 1){
            $boton="<a href='$ruta'>Anular Rerserva</a>";
        }else{
            $boton="Reserva cancelada";
        }
            if($datos->id_usuario == session('id')){
                $template="<tr>
                <th scope='row'>$datos->id</th>
                    <td>$datos->nombre</td>
                    <td>$datos->fechaIni</td>
                    <td>$datos->fechaFin</td>
                    <td>$datos->nroDias</td>
                    <td>$boton</td>
                 </tr>";
                echo $template;
            }
            }

  ?>
   
  </tbody>
</table>
  
  </div>
</div>