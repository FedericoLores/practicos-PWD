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
        <label>Patente</label>
        <input id="Patente" readonly name ="Patente" type="text" value="<?php echo $obj->getPatente()?>">
        <label>Modelo</label>
        <input type="text" id="Modelo" name="Modelo"><?php echo $obj->getModelo()?>
        <label>Marca</label>
        <input type="text" id="Marca" name="Marca"><?php echo $obj->getModelo()?>
        <label>Descripcion</label>
        <input type="text" id="Modelo" name="Modelo"><?php echo $obj->getModelo()?>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <input type="submit">
    </div>
</form>
<?php 
}else{
    echo "<p>No se encontro la clave que desea modificar";
}?>
<a href="indexAuto.php"><input type="button" class="btn btn-primary" value="Volver"/></a>