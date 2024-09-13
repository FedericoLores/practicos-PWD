<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
?>
<div class="card m-3">
<div class="card-title text-center mt-3">
    <h4>Nueva Persona</h4>
</div>

<form method="post" action="../accion/tp4/abmPersona.php" id="formulario" class="needs-validation" novalidate>
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
        <div class="row my-2">
            <div class="col mx-2">
                <a  class="btn btn-primary" href="listaPersonas.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-success mx-2" onclick="validar()" value="Enviar">
            </div>
        </div>
    </div>
	
</form>

</div>
<!--<input id="accion" name ="accion" value="nuevo" type="hidden">-->
<?php include_once '../estructura/footer.php';?>