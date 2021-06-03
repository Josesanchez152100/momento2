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
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/footer.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-primary bg-primary text-light p-3">
  <div class="container-fluid">
    <a class="navbar-brand"> <h3>LUGARES</h3></a>
    <a class="navbar-brand btn btn-dark" href="<?php echo base_url(); ?>/public/salir">Log-Out</a>
  </div>
  

                 <div class="jumbotron mb-5">
                          <h1 class="text-nowrap" name="nombre"><?php echo (session("nombre"))." ".(session("apellido")); ?></h1>
                         <h5 class="text-white"><p name="descripcion"><?php echo (session("descripcion")); ?></p></h5> 
                         <b class="text-white"><p name="descripcion"><?php echo (session("email")); ?></p></b> 
                      </div>
                  
        
</nav>

<?php
  foreach($apartamentos as $apartamento){
    $update= base_url()."/public/update_Apartamentos?id={$apartamento->id}"; 

   $template =" <div class='me-5 ms-5  bg-gradient text-dark mt-5  border fs-4 border-3 border-dark rounded-3 p-3 ml-4'>
    <h1 class='text-center p-4'>Actualizar Apartamento</h1>
  <form method='POST' action='$update' class='row g-3'>
    <div class='col-md-6'>
      <label for='' class='form-label'>Nombre</label>
      <input type='text' class='form-control' id='nombre' name='nombre' value=' $apartamento->nombre'>
    </div>
    <div class='col-md-6'>
      <label for='inputPassword4' class='form-label'>Ubicación</label>
      <input type='text' class='form-control' id='ubicacion' value='$apartamento->ubicacion' name='ubicacion'> 
    </div>
    <div class='col-12'>
      <label for='' class='form-label'>Descripcion</label>
      <textarea class='form-control' id='descrip' name='descrip' rows='3' placeholder='# de personas, mascotas, fumar etc:'>$apartamento->descripcion</textarea>
     
    </div>
    <div class='col-12'>
      <label for='' class='form-label'>Comodidades</label>
      <textarea class='form-control' id='comod' name='comod' rows='3' placeholder='Apartmento, cocina, baño, etc:'>$apartamento->comodidades</textarea>
    </div>
    <div class='col-md-6'>
      <label for='inputCity' class='form-label' >Pais</label>
      <input type='text' class='form-control' name='pais' id='pais' value='$apartamento->pais'>
    </div>
    <div class='col-md-4'>
      <label for='inputState' class='form-label'>Ciudad</label>
      <select id='inputState' name='ciudad' id='ciudad' class='form-select'>
      <option selected >$apartamento->ciudad</option>
      <option  value='Medellin'>Medellin</option>
      <option  value='Santa Marta'>Santa Marta</option>
      <option  value='Bogota'>Bogota</option>
      <option  value='Cartagena'>Cartagena</option>
      <option  value='Cali'>Cali</option>
      </select>
    </div>
    <div class='col-md-2'>
      <label for='inputZip' class='form-label'>Fecha Publicación</label>
      <input type='date' class='form-control' id='fecha' name='fecha' value='<?php echo  $apartamento->fecha?>'>
    </div>
    <div class='col-md-6'>
      <label for='' class='form-label'>Dirección Image</label>
      <input type='text' class='form-control' id='dirUrl' name='dirUrl' placeholder='URL-Image' value='$apartamento->imagen'>
    </div>
    <div class='col-md-6'>
      <label for='' class='form-label'>Precio noche</label>
      <input type='text' class='form-control' id='valor' name='valor' placeholder='$150.000' value='$apartamento->valor'>
    </div>
    <div class='d-grid gap-2 p-4'>
      <button type='submit' id='btCrear' name='btCrear' class='btn  btn-lg btn-success'>Actualizar</button>
    </div>
  
  </form>

  </div>";
echo ($template);

  }
?>