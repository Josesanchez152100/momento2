
<div  style='background-color: silver;'>

<div class="container-md mt-5 mb-4 col-md-6 justify-content:center border border-3 radius rounded ">

   
    <?php
       
    foreach ($infoApartamentos as $apartamento){

        $reservar= base_url() . "/public/reserva_apart?id={$apartamento->id}";
     
        $template="<div class='text-center'><H3>FORMULARIO DE RESERVA</H3></div> 
        <form action='$reservar' method='POST'  class='row g-3 mt-2 needs-validation' novalidate>
        <div class='col-md-6'>
            <label for='validationCustom01' class='form-label'>Nombre Apartamento</label>
            <input type='text' class='form-control' id='validationCustom01' value='$apartamento->nombre' required>
            <div class='valid-feedback'>
                Looks good!
            </div>
        </div>
        <div class='col-md-6'>
            <label for='validationCustom02' class='form-label'>Ubicacion</label>
            <input type='text' class='form-control' id='validationCustom02' value='$apartamento->ubicacion' required>
        </div>
        <div class='col-md-6'>
            <label for='validationCustomUsername' class='form-label'>Valor</label>
            <div class='input-group has-validation'>
                <input type='text' class='form-control' id='validationCustomUsername' aria-describedby='inputGroupPrepend' value='$apartamento->valor' required>
            </div>
        </div>
        <div class='col-md-6'>
            <label for='validationCustom03' class='form-label'>Ciudad</label>
            <input type='text' class='form-control' id='validationCustom03' required value='$apartamento->ciudad' >
        </div>
        <div class='col-md-6'>
            <div class='col-md-10'>
                <label for='inputZip' class='form-label'>Fecha desde</label>
                <input type='date' class='form-control' id='fechaIni' name='fechaIni' required>
            </div>

        </div>
        <div class='col-sm-6'>
            <div class='col-md-10'>
                <label for='inputZip' class='form-label'>Fecha hasta</label>
                <input type='date' class='form-control' id='fechaFin' name='fechaFin' required>
            </div>
        </div>
        <div class='col-md-8'>
            <div class='col-sm-8'>
            <label class='form-label'>Cantidad de dias</label>
            <input type='text' class='form-control mb-3' id='dias' name='nroDias' required>
            <span id='error_login'></span>
            </div>
            <div class='d-grid gap-2 text-center'>
            <button class='btn btn-primary  mb-3' type='submit'  onclick='reserva()'>RESERVAR</button>

           
    </div>
</div>
</div>";


echo $template;

}

?>

</form>
</div>

</div>