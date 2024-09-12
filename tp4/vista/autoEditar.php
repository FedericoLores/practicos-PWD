<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../utils/scripts.php');

$objAbmAuto = new AbmAuto();
$datos = datosRecibidos();
$obj =NULL;
if (isset($datos['Patente'])){
    $listaAuto = $objAbmAuto->buscar($datos);
    if (count($listaAuto)==1){
        $obj= $listaAuto[0];
    }
}

?>
<div class="card m-3">
<div class="card-title text-center mt-3">
    <h4>Editar Auto</h4>
</div>
<div class="card-body">
<?php if ($obj!=null){?>
<form method="post" action="accion/accionCambioDuenio.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" value="<?php echo $obj->getPatente()?>"/>
        <label for="NroDni" class="form-label mt-2">DNI del propietario</label>
        <input type="number" class="form-control" id="NroDni" name="NroDni" required/>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="indexAuto.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar()" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
<?php 
}else{
    echo '<p class="container">No se encontro la clave que desea modificar<p>';
    echo '<div class="container text-center"><a href="indexAuto.php" class="btn btn-secondary mx-2">Volver</a></div>';
}?>
</div>
</div>
<?php include_once '../vista/estructura/footer.php';?>