<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
?>
<div class="card m-3">
<div class="card-title text-center mt-3">
<h4>Nuevo Auto</h4>
</div>
<div class="card-body">
<form method="post" action="accion/abmAuto.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" name ="Patente" type="text" class="form-control" required/>
        <label for="Marca" class="form-label mt-2">Marca</label>
        <input id="Marca" name ="Marca" type="text" class="form-control" required/>
        <label for="Modelo" class="form-label mt-2">Modelo</label>
        <input id="Modelo" name ="Modelo" type="number" min="0" class="form-control" required/>
        <label for="DniDuenio" class="form-label mt-2">Dni del propietario</label>
        <input id="DniDuenio" name ="DniDuenio" type="text" class="form-control" required/>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a class="btn btn-secondary mx-2" href="indexAuto.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
            </div>
        </div>
        
    </div>
</form>
</div>
</div>
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