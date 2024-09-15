<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
?>
<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Nueva Persona</h4>
</div>

<form method="post" action="../accion/tp4/accionNuevaPersona.php" id="nuevaPersona" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label">Numero de DNI</label>
        <input id="NroDni" name ="NroDni" type="number" class="form-control" min="10000000" max="99999999" required/>
        <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
        <label for="Apellido" class="form-label">Apellido</label>
        <input id="Apellido" name ="Apellido" type="text" class="form-control" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" required/>
        <div class="invalid-feedback">Ingrese un apellido sin numeros o simbolos</div>
        <label for="Nombre" class="form-label">Nombre</label>
        <input id="Nombre" name ="Nombre" type="text" min="0" class="form-control" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" required/>
        <div class="invalid-feedback">Ingrese un nombre sin numeros o simbolos</div>
        <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
        <input id="fechaNac" name ="fechaNac" type="date" class="form-control" min="1900-01-01" max="<?php echo date("Y-m-d");?>" required/>
        <div class="invalid-feedback">Ingrese una fecha válida</div>
        <label for="Telefono" class="form-label">Telefono</label>
        <input id="Telefono" name ="Telefono" type="number" class="form-control" min="100000" max="9999999999" required/>
        <div class="invalid-feedback">El telefono debe contener entre 6 y 10 digitos</div>
        <label for="Domicilio" class="form-label">Domicilio</label>
        <input id="Domicilio" name ="Domicilio" type="text" class="form-control" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s]+$" minlength="3" maxlength="50" required/>
        <div class="invalid-feedback">Ingrese un domicilio valido</div>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <div class="row my-2">
            <div class="col mx-2">
                <a  class="btn btn-primary" href="listaPersonas.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-success mx-2" onclick="validar('nuevaPersona')" value="Enviar">
            </div>
        </div>
    </div>
	
</form>

</div>
<?php include_once '../estructura/footer.php';?>