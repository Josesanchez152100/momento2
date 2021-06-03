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

<body class="bg-white
">


<nav class="navbar navbar-dark bg-primary  text-light p-3">
    <div class="container-fluid">
      <a class="navbar-brand">
        <h3>LUGARES</h3>
      </a>
      <a class="navbar-brand btn btn-dark" href="<?php echo base_url(); ?>/public/salir">Log-Out</a>
    </div>

    <div class="jumbotron  bg-primary p-2">
      <img src='../public/assets/img/Eddy.png' width="146" height="106" class='rounded' >
      <h1 class="text-nowrap position-absolute top-60 end-0" name="nombre"><?php echo (session("nombre")) . " " . (session("apellido")); ?></h1>
      <h5 class="text-ligth ">
        <p name="descripcion"><?php echo (session("descripcion")); ?></p>
      </h5>
      <b class="text-white position-absolute bottom-1 end-0">
        <p name="descripcion"><?php echo (session("email")); ?></p>
      </b>
    </div>
  </nav>


  <div class="container">
  <div class='row'>


    <?php
    foreach ($apartamentos as $apartamento) {
      $reservarApart = base_url() . "/public/reserva?id={$apartamento->id}";
      //$fecha = $apartamento->fecha;

     // if ($fecha >= $fechaIni && $fecha <= $fechaFin) {

        if($apartamento->estado == 0) {
            $boton='RESERVAR';

            $template = " <div  class='col-md-6 col-sm-12  pt-5' >
            <div class='prueba '>
                 <form  action='$UpdateHome' method='POST'
              <div class='card bg-info text-white p-3 mb-4'>
                <img  class='card-img' src='{$apartamento->imagen}'  alt='Card image' width='50%' height='450px'>
              
                  <div class='card-img-overlay'>
                  <h4> <p class='badge bg-dark  text-white'>{$apartamento->ubicacion}</p></h4>
                    <h1 class='card-text position-absolute top-0 end-0 pt-4 p-4'>{$apartamento->nombre}</h1>             
                  <h2> <p class='card-text mb-5'>{$apartamento->comodidades}</p> </h2>
                     <h1> <p class='badge bg-dark text-primary position-absolute bottom-2 end-0 ' mr-4 p-4>{$apartamento->valor}</p></h1>
                   <div class='btn position-absolute bottom-0 end-10 mb-4' role='group' aria-label='Basic mixed styles example'>
                                   
                  </div>
                  <h3> <p class='card-text ms-4 position-absolute top-50 start-0 translate-middle-y'>{$apartamento->descripcion}</p></h3>
                  <div class='btn btn-lg  btn-block mb-5'  aria-label='Basic mixed '>
                  <a href='{$reservarApart}' class='btn position-absolute bottom-0   btn-success ms-3 '>$boton</a>
                </div>
                  </div>
                  
                  </form>
                 
                  </div>
                  
              </div>";

        }else{
            $boton='APARTAMENTO RESERVADO';
            $template = " <div  class='col-md-6 col-sm-12  pt-5' >
            <div class='prueba '>
                 <form  action='$UpdateHome' method='POST'
              <div class='card bg-info text-white p-3 mb-4'>
                <img  class='card-img' src='{$apartamento->imagen}'  alt='Card image' width='50%' height='450px'>
              
                  <div class='card-img-overlay'>
                  <h4> <p class='badge bg-dark  text-white'>{$apartamento->ubicacion}</p></h4>
                    <h1 class='card-text position-absolute top-0 end-0 pt-4 p-4'>{$apartamento->nombre}</h1>             
                  <h2> <p class='card-text mb-5'>{$apartamento->comodidades}</p> </h2>
                     <h1> <p class='badge bg-dark text-primary position-absolute bottom-2 end-0 ' mr-4 p-4>{$apartamento->valor}</p></h1>
                   <div class='btn position-absolute bottom-0 end-10 mb-4' role='group' aria-label='Basic mixed styles example'>
                                   
                  </div>
                  <h3> <p class='card-text ms-4 position-absolute top-50 start-0 translate-middle-y'>{$apartamento->descripcion}</p></h3>
                  <div class='btn btn-lg  btn-block mb-5'  aria-label='Basic mixed styles example'>
                  <a href='#' class='btn position-absolute bottom-0   btn-danger ms-3 '>$boton</a>
                </div>
                  </div>
                  
                  </form>
                 
                  </div>
                  
              </div>";
        }

        
              

        echo ($template);
      };
    

    ?>
  </div>
</div>