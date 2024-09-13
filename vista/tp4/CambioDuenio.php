<?php
include_once ('../estructura/tp4/header.php');
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
<form method="post" action="../accion/tp4/accionCambioDuenio.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" value="<?php echo $patente;?>"/>
        <label for="NroDni" class="form-label mt-2">DNI del propietario</label>
        <input type="number" class="form-control" id="NroDni" name="NroDni" required/>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/verAutos.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar()" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>