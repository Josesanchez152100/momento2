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

<body class="bg-light">


  <nav class="navbar navbar-dark bg-primary text-light p-3">
    <div class="container-fluid">
      <a class="navbar-brand">
        <h3>LUGARES</h3>
      </a>
      <a class="navbar-brand btn btn-dark text-white" href="<?php echo base_url(); ?>/public/salir">Log-Out</a>
    </div>

    <div class="jumbotron mb-5">
      <img src='../public/assets/img/Eddy.png' width="106" height="106" class='rounded-circle'>
      <h1 class="text-nowrap " name="nombre"><?php echo (session("nombre")) . " " . (session("apellido")); ?></h1>
      <h5 class="text-white">
        <p name="descripcion"><?php echo (session("descripcion")); ?></p>
      </h5>
      <b class="text-white">
        <p name="descripcion"><?php echo (session("email")); ?></p>
      </b>
    </div>
  </nav>

  <div class="container">
    <div class='row'>

      <?php
      foreach ($infoApartamentos as $apartamento) {

        $deleteApart = base_url() . "/public/eliminar-Apartamento?id={$apartamento->id}";
        $UpdateApart = base_url() . "/public/update_Apartamento?id={$apartamento->id}";


        if (session('id') == $apartamento->id_usuarios) {


          $template = 
          
          "<div class='col-sm-12 col-mg-6 col-lg-6 mt-4'

            <div>
                <div class='card bg-primary bg-info text-white p-3 mb-4'>
                  <img class='card-img' src='{$apartamento->imagen}' alt='Card image' width='50%' height='450px'>
                
                    <div class='card-img-overlay'>
                    <h4> <p class='badge bg-light  text-dark'>{$apartamento->ubicacion}</p></h4>
                      <h1 class='card-text position-absolute top-0 end-0 pt-4 p-4'>{$apartamento->nombre}</h1>     
                    <p class='card-text mb-5 fs-3'>{$apartamento->comodidades}</p>
                    <h1> <p class='badge bg-dark text-primary position-absolute bottom-2 end-0' mr-4 p-4>{$apartamento->valor}</p></h1>

                    <div class='btn position-absolute bottom-0 end-10 mb-4' role='group' aria-label='Basic mixed styles example'>
                      <a href='{$deleteApart}' class='btn btn-lg btn-danger ms-3 '>Eliminar</a>
                      <a href='{$UpdateApart}' class='btn  btn-lg btn-primary'>Actualizar</a>

                    </div>
                    <h4> <p class='card-text ms-4 position-absolute top-50 start-0 translate-middle-y'>{$apartamento->descripcion}</p></h4>
                    </div>
              </div>
              
            </div>";

          echo ($template);
        };
      };
      ?>
    </div>
  </div> 
  <div class="me-2 ms-2  col-sm-12 bg-white text-dark mt-5  border fs-4 border-3 border-dark rounded-3 p-3 ml-1">
    <h1 class="text-center p-4">Nuevo Lugar</h1>
    <form id="formAparta" method="POST" action="<?php echo base_url(); ?>/public/anfit-Apartamento" onsubmit="CrearApartamento(boton)" class="row g-3 needs-validation ">
      <div class="col-md-6">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
      </div>
      <div class="col-12">
        <label for="" class="form-label">Descripcion</label>
        <textarea class="form-control" id="descrip" name="descrip" required rows="3" required placeholder="Breve reseña del sitio"></textarea>

      </div>
      <div class="col-12">
        <label for="" class="form-label">Comodidades</label>
        <textarea class="form-control" id="comod" name="comod" required rows="3" required placeholder="Con que cuenta el sitio"></textarea>
      </div>
      <div class="col-md-4">
        <label for="inputCity" class="form-label">Pais</label>
        <input type="text" class="form-control" required name="pais" id="pais">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Ciudad</label>
        <select id="inputState" name="ciudad" id="ciudad" class="form-select">
          <option selected value="Medellin">Medellin</option>
          <option value="Santa Marta">Santa Marta</option>
          <option value="Bogota">Bogota</option>
          <option value="Cartagena">Cartagena</option>
          <option value="Cali">Cali</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Fecha Publicación</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>
      <div class="col-md-8">
        <label for="" class="form-label">Imagén</label>
        <input type="text" class="form-control" required id="dirUrl" name="dirUrl" placeholder="dirección URL de la imagen que desea mostrar">
      </div>
      <div class="col-md-4">
        <label for="" class="form-label">Precio noche</label>
        <input type="text" class="form-control" required id="valor" name="valor" placeholder="Valor">
      </div>
      <div>
        <span id="error"></span>
      </div>
      <div class="d-grid gap-2 p-4">
        <button type="submit" id="btCrear" name="btCrear" class="btn  btn-lg btn-success">Crear</button>
      </div>

    </form>

  </div>

  </div>
  </div>