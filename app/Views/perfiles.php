
<div class="container">
<div class='row  offset-sm-1'>
    <?php

        foreach($usuarios as $usuario){

            $deletePerfil = base_url()."/public/delete-perfiles?id={$usuario->id}";
            $updateregistro= base_url()."/public/update_registro?id={$usuario->id}";

        
            $template = " <div  class=' col-12 col-sm-12 col-md-5 col-lg-3 pt-5' >
            <div class='card  bg-white'>
                    <div class='card-body bg-white border border-3  border border-dark  '>
                        <img src='../public/assets/img/Eddy.png' class='rounded-circle w-50 p-2 border border-dark align-self-center'>
                        <h4 class='card-title text-primary text-center  ' name='nombre'>{$usuario->nombre} {$usuario->apellido}</h4>
                        </div>
                        <ul class='list-group list-group-flush border border-3  bg-dark rounded-end mt-2  '>
                        <li class='list-group-item bg-light' name='ciudad'>{$usuario->ciudad}</li>
                        <li class='list-group-item bg-light' name='pais'>{$usuario->pais}</li>
                        <li class='list-group-item bg-light' name='correo'>{$usuario->correo}</li>
                        </ul>
                        <div class='card-body border border-2 border-dark'>
                        <h2 class='card-title  text-center bg-white text-wrap  text-info ' name='rol'>{$usuario->rol}</h2>
                        </div><br>
                        <div class='d-inline p-2'>
                            <a href='{$deletePerfil}' class='btn btn-danger'>Eliminar</a>
                            <a href='{$updateregistro}' class='btn btn-secondary'>Actualizar</a>
                        </div>
                 </div>
                   
            </div <br>>";

                echo $template;
        }   
    ?>
</div>
</div>   