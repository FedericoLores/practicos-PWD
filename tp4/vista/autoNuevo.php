<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
?>
<div class="container d-flex justify-content-center">
<h3>Nuevo Auto</h3>
</div>

<form method="post" action="accion/abmAuto.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" name ="Patente" type="text" class="form-control" required/>
        <label for="Marca" class="form-label">Marca</label>
        <input id="Marca" name ="Marca" type="text" class="form-control" required/>
        <label for="Modelo" class="form-label">Modelo</label>
        <input id="Modelo" name ="Modelo" type="number" min="0" class="form-control" required/>
        <label for="DniDuenio" class="form-label">Dni del propietario</label>
        <input id="DniDuenio" name ="DniDuenio" type="text" class="form-control" required/>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
    </div>
	
</form>
<br><br>
<a href="indexAuto.php">Volver</a>
<script>
    //seleccionamos el formulario
    var formulario = document.getElementById("formulario")
    //definimos un evento para validar
    formulario.addEventListener('submit', evento => {
        if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
            event.preventDefault()
            event.stopPropagation()
            }
        formulario.classList.add('was-validated')
    })

    var loginModal = new bootstrap.Modal("#login")

    //mostramos el modal apenas carga la pagina
    window.addEventListener("DOMContentLoaded", () => {
        loginModal.show()
    })



</script>
<!--<input id="accion" name ="accion" value="nuevo" type="hidden">-->
<?php include_once '../vista/estructura/footer.php';?>