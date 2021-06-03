  
const login = () => {
  let correo = document.getElementById("email").value;
  let contrasena = document.getElementById("password").value;

  if (correo == "" || contrasena == "") {
    document.getElementById("error_login").innerHTML =
      "Debe ingresar correo y contraseña";
  } else {
    document.getElementById("error_login").innerHTML = "";
  }
};

document.addEventListener("DOMContentLoaded", function () {
document.getElementById("form").addEventListener("submit", FormularioRegistrarse);
});

function FormularioRegistrarse(boton) {
  boton.preventDefault();
  let nombre = document.getElementById("nombre").value;
  let apellido = document.getElementById("apellido").value;
  let ciudad = document.getElementById("ciudad").value;
  let pais = document.getElementById("pais").value;
  let correo = document.getElementById("email").value;
  let contrasena = document.getElementById("password").value;
  let rol = document.getElementById("rol").value;

  if (
    nombre.length == 0 ||
    apellido.length == 0 ||
    ciudad.length == 0 ||
    pais.length == 0 ||
    correo.length == 0 ||
    contrasena.length == 0 ||
    rol.length == 0
  ) {
    document.getElementById("error").innerHTML =
      "Debe ingresar todos los campos";
    return;
  }
  contrasena = document.getElementById("password").value;
  if (contrasena.length < 8) {
    document.getElementById("error").innerHTML =
      "La contraseña debe ser mayor a 8 caracteres";
    return;
  }
  this.submit();
  document.getElementById("error").innerHTML = "";
}
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("formulario").addEventListener("submit", FormularioContactenos);
  });
  
  function FormularioContactenos(enviar) {
    enviar.preventDefault();

    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let correo = document.getElementById("email").value;
    let celular = document.getElementById("phone").value;
    let texto = document.getElementById("texto").value;
  
    if (nombre.length == 0 || apellido.length == 0 || correo.length == 0 || celular.length == 0 || texto.length == 0 ) {

         alert("Dede diligenciar todos los campos");
      return false;
    } celular = document.getElementById("phone").value;
    if (celular.length < 10) {
     alert("* El celular debe tener 10 numeros") ;
      return true;
    }
    this.submit();
    alert("LOS DATOS   FUERON ENVIADOS CON EXITO") ;
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formAparta").addEventListener("submit", CrearApartamento);
    });


  function CrearApartamento(boton) {
    //boton.preventDefault();
    let nombre = document.getElementById("nombre").value;
    let ubicacion = document.getElementById("ubicacion").value;
    let descrip = document.getElementById("descrip").value;
    let comod = document.getElementById("comod").value;
    let pais = document.getElementById("pais").value;
    let ciudad = document.getElementById("ciudad").value;
    let fecha = document.getElementById("fecha").value;
    let dirUrl = document.getElementById("dirUrl").value;
    let valor = document.getElementById("valor").value;
  
    if (
      nombre == "" ||
      ubicacion == "" ||
      ciudad == "" ||
      pais == "" ||
      descrip =="" ||
      comod == "" ||
      dirUrl =="" ||
      comod =="" ||
      valor =="" ||
      fecha ==""
    ) {
      document.getElementById("error").innerHTML =
        "Debe ingresar todos los campos";
      return ;
    }
    this.submit();
         alert("LOS DATOS   FUERON ENVIADOS CON EXITO") ;
  }

  function btnfecha(){
    alert("clickkk")
    let fechaIni = document.getElementById("fechaIni").value;
    let fechaFin = document.getElementById("fechaFin").value;
  
    if (fechaIni == "" || fechaFin == "") {
     // document.getElementById("error_fecha").innerHTML =
       alert ("Debe seleccionar las fechas");
       return;
    } else {
      document.getElementById("error_fecha").innerHTML = "";
      return
    }
  };

  const reserva = () => {
    let fechaIni= document.getElementById("fechaIni").value;
    let fechaFin = document.getElementById("fechaFin").value;
  
    if (fechaIni== "" || fechaFin == "") {
      document.getElementById("error_login").innerHTML =
        "Debe ingresar todos los datos";
    } else {
      document.getElementById("error_login").innerHTML = "";
    }
  };
  