<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 8 (cambio dueño)";
$descripcion = "Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../estructura/header.php');
include_once('../../configuracion.php');
$auto = new AbmAuto();
$datos = datosRecibidos();
if ($auto->seteadosCamposClaves($datos)){
    $listaAuto = $auto->buscar($datos);
    if (count($listaAuto)==1){
        $obj= $listaAuto[0];
        $patente = $datos['Patente'];
    }
}else{
    $patente = "";
}

?>
<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Editar Auto</h4>
</div>
<div class="card-body">
<form method="post" action="../accion/tp4/accionCambioDuenio.php" id="cambioDuenio" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" value="<?php echo $patente;?>" pattern="^[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s-]+$" minlength="4" maxlength="10" required/>
        <div class="invalid-feedback">Ingrese una patente de valida de 4-8 caracteres</div>
        <label for="NroDni" class="form-label mt-2">DNI del propietario</label>
        <input type="number" class="form-control" id="NroDni" name="NroDni" min="10000000" max="99999999" required/>
        <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/verAutos.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar('cambioDuenio')" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>