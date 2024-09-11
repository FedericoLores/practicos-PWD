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
<h3>Auto</h3>
<?php if ($obj!=null){?>
<form method="post" action="accion/abmAuto.php">
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" readonly name ="Patente" type="text" value="<?php echo $obj->getPatente()?>"/>
        <label for="Marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $obj->getMarca()?>"/>
        <label for="Modelo" class="form-label">Modelo</label>
        <input type="number" class="form-control" id="Modelo" name="Modelo" value="<?php echo $obj->getModelo()?>"/>
        <label for="DniDuenio" class="form-label">DNI del propietario</label>
        <input type="number" class="form-control" id="DniDuenio" name="DniDuenio" value="<?php echo $obj->getDniDuenio()?>"/>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <input type="submit" class="btn btn-success m-2">
    </div>
</form>
<?php 
}else{
    echo "<p>No se encontro la clave que desea modificar";
}?>
<div class="container">
    <a href="indexAuto.php"><input type="button" class="btn btn-primary m-2" value="Volver"/></a>
</div>