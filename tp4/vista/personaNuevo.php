<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmPersona.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
?>
<div class="container d-flex justify-content-center">
    <h3>Nueva Persona</h3>
</div>

<form method="post" action="accion/abmPersona.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label">Numero de DNI</label>
        <input id="NroDni" name ="NroDni" type="number" class="form-control" required/>
        <label for="Apellido" class="form-label">Apellido</label>
        <input id="Apellido" name ="Apellido" type="text" class="form-control" required/>
        <label for="Nombre" class="form-label">Nombre</label>
        <input id="Nombre" name ="Nombre" type="text" min="0" class="form-control" required/>
        <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
        <input id="fechaNac" name ="fechaNac" type="date" class="form-control" required/>
        <label for="Telefono" class="form-label">Telefono</label>
        <input id="Telefono" name ="Telefono" type="tel" class="form-control" required/>
        <label for="Domicilio" class="form-label">Domicilio</label>
        <input id="Domicilio" name ="Domicilio" type="text" class="form-control" required/>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <div class="container d-flex justify-content-center">
            <input type="submit" name="submit" class="btn btn-success m-2" value="Enviar">
        </div>
    </div>
	
</form>
<div class="container d-flex justify-content-center">
    <a href="indexPersona.php"><input type="button" name="Volver" class="btn btn-primary m-2" value="Volver"></a>
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