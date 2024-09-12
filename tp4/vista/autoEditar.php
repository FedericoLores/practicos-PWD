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
<div class="container">
Patente: <a class="text-body bg-warning text-decoration-none px-1"><?php echo $obj->getPatente()?></a>
</div>
<form method="post" action="accion/abmAuto.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label d-none">Patente</label>
        <input id="Patente" class="form-control d-none" readonly name ="Patente" type="text" value="<?php echo $obj->getPatente()?>"/>
        <label for="Marca" class="form-label mt-2">Marca</label>
        <input type="text" class="form-control" id="Marca" name="Marca" required value="<?php echo $obj->getMarca()?>"/>
        <label for="Modelo" class="form-label mt-2">Modelo</label>
        <input type="number" class="form-control" id="Modelo" name="Modelo" required value="<?php echo $obj->getModelo()?>"/>
        <label for="DniDuenio" class="form-label mt-2">DNI del propietario</label>
        <input type="number" class="form-control" id="DniDuenio" name="DniDuenio" required value="<?php echo $obj->getDniDuenio()?>"/>
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