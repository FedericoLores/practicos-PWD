<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
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
<form method="post" action="../accion/tp4/accionCambioDuenio.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" value="<?php echo $obj->getPatente()?>"/>
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
<?php 
}else{
    echo '<p class="container">No se encontro la clave que desea modificar<p>';
    echo '<div class="container text-center"><a href=""../tp4/verAutos.php"" class="btn btn-secondary mx-2">Volver</a></div>';
}?>
</div>
</div>
<?php include_once '../estructura/footer.php';?>