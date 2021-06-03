<div class="container mt-5 mb-4 col-lg-5 justify-content:center border radius rounded" >
       
  <form  method="POST" action="<?php echo base_url()?>/public/update_registro?id=<?php echo $usuario->id?>" class="row g-3 bg-light text-grey rounded" id="updateForm">
  <p class="h1 text-center bg-secondary text-light p-2 rounded">Actualizar Registro</p>
    <div class="col-md-6 ">
      <label for="validationServer01" class="form-label">Nombres</label>
      <input type="text" class="form-control" id="nombre" value="<?php echo $usuario->nombre ?>" name="nombre"  required>
      <div class="valid-feedback">
  
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer02" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="apellido" value="<?php echo $usuario->apellido?>"  name="apellido" required>
      <div class="valid-feedback">
      </div>
    </div>
    
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">Ciudad</label>
      <select class="form-select" id="ciudad" aria-describedby="validationServer04Feedback" name="ciudad" required>
         <option ><?php echo $usuario->ciudad?></option>
         <option   value="Medellin">Medellin</option>
          <option   value="Santa Marta">Santa Marta</option>
          <option  value="Bogota">Bogota</option>
          <option   value="Cartagena">Cartagena</option>
          <option   value="Cali">Cali</option>
        
      </select>
    </div>
    <div class="col-md-6">
      <label for="validationServer04" class="form-label">Pais</label>
          <input type="text" class="form-control" id="pais" value="<?php echo $usuario->pais?>" name="pais" required>
      <div id="validationServer04Feedback" class="invalid-feedback">
      </div>
    </div>
    <div class="col-md-6">
          <label for="validationServer04" class="form-label">Rol</label>
          <select class="form-select" id="rol" aria-describedby="validationServer04Feedback" name="rol" >
              <option><?php echo $usuario->rol?></option>
              <option  value="Anfitrion">Anfitrion</option>
              <option  value="Invitado">Invitado</option>
          </select>
             </div>
      <div class="col-12">
          <label for="" class="form-label">Descripcion</label>
          <textarea class="form-control" id="descrip" name="descripcion" rows="3" placeholder="Breve descripcion personal:"><?php echo $usuario->descripcion?></textarea>
      </div>
            <div class="form-group  text-center">
                <h5><span  class="label label-danger text-warning bg-dark tex-center " id="error"></span></h5>
           </div>
          <button  class="btn btn-secondary btn-lg btn-block mb-4" type="submit" name="btRegistrar">Enviar</button>
     
      </form>
</div>
