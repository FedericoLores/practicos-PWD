<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 4 (buscar auto)";
$descripcion = 'Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.';
include_once ('../estructura/header.php');
include_once('../../configuracion.php');
?>

<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Buscar Auto</h4>
</div>
<div class="card-body">
<form id="buscarAuto" method="post" action="../accion/tp4/accionBuscarAuto.php" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9]+([ \-]?[A-Za-zÁÉÍÓÚáéíóúÑñ0-9]+)*$" minlength="4" maxlength="9" placeholder="AA 123 ZZ" required/>
        <div class="invalid-feedback">Ingrese una patente de valida de 4-8 caracteres</div>
        <input id="accion" name ="accion" value="buscar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/verAutos.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar('buscarAuto')" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>