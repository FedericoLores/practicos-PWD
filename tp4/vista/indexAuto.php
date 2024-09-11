<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../modelo/Auto.php');
$objAbmAuto = new AbmAuto();

$listaAuto = $objAbmAuto->buscar(null);
?>
<div class="card p-3">
	<h3>ABM - Auto</h3>
	<a class="btn btn-primary" href="autoNuevo.php">Ingresar un auto</a>
</div>
<div class="container">
	<table class="table table-sm">
	<tr>
		<th scope="col">Patente</th>
		<th scope="col">Marca</th>
		<th scope="col">Modelo</th>
		<th scope="col">DNI del propietario</th>
		<th scope="col">Editar</th>
		<th scope="col">Eliminar</th>
	</tr>
<?php	

if(count($listaAuto)>0){
    foreach($listaAuto as $objAuto){ 
        echo '<div class="row"><div class="col"><tr><td>'.$objAuto->getPatente().'</td></div>';
		echo '<div class="col"><td>'.$objAuto->getMarca().'</td></div>';
		echo '<div class="col"><td>'.$objAuto->getModelo().'</td></div>';
		echo '<div class="col"><td>'.$objAuto->getDniDuenio().'</td></div>';
        echo '<div class="col"><td><a class="btn btn-success" href="autoEditar.php?Patente='.$objAuto->getPatente().'">editar</a></td></div>';
        echo '<div class="col"><td><a class="btn btn-danger" href="accion/abmAuto.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr></div></div>'; 
	}
}
?>
</table></div>
<?php include_once './estructura/footer.php';?>