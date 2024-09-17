<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 9 (buscar persona)";
$descripcion = "Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../estructura/header.php');
include_once('../../configuracion.php');
?>

<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Buscar Persona</h4>
</div>
<div class="card-body">
<form id="buscarPersona" method="post" action="../accion/tp4/accionBuscarPersona.php" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label">DNI</label>
        <input id="NroDni" class="form-control" name ="NroDni" min="10000000" max="99999999" required type="number"/>
        <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
        <input id="accion" name ="accion" value="buscar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/listaPersonas.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar('buscarPersona')" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>