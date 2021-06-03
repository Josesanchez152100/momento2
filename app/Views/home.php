
<div class="container">
  <div class='row'>


    <?php
    foreach ($apartamentos as $apartamento) {
      $UpdateHome = base_url() . "/public/home2";  

        $template = " <div  class='col-lg-4 col-md-6 col-sm-12  pt-5' >
            <div>
                 <form  action='$UpdateHome' method='POST'
              <div class='card bg-secondary bg-info text-white p-3 mb-4'>
                <img  class='card-img' src='{$apartamento->imagen}'  alt='Card image' width='50%' height='450px'>
              
                  <div class='card-img-overlay pb-5'>
                  <h4> <p class='badge bg-dark  text-white'>{$apartamento->ubicacion}</p></h4>
                    <h2 class='card-text position-absolute top-0 end-0 pt-6 p-4'>{$apartamento->nombre}</h2>             
                  <h4> <p class='card-text mb-5'>{$apartamento->comodidades}</p> </h4>
                     <h1> <p class='badge bg-dark text-primary position-absolute bottom end-0 ' mr-4 p-4>{$apartamento->valor}</p></h1>
                   <div class='btn position-absolute bottom-0 end-10 mb-4' role='group' aria-label='Basic mixed styles example'>
                                   
                  </div>
                  <h4> <p class='card-text ms-4 position-absolute top-50 start-0 translate-middle-y'>{$apartamento->descripcion}</p></h4>
                  </div>
                  </form>
                  </div>
                  <div id='effect-hover'>
                     <div class='text-center bg-primary text-white'>Login para reservar
                          
                        </div>
                     
                    </div>
              </div>";
              

        echo ($template);
      
    }

    ?>
  </div>
</div>