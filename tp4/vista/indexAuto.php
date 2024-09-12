<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../modelo/Auto.php');
$objAbmAuto = new AbmAuto();

$listaAuto = $objAbmAuto->buscar(null);
?>
<div class="card m-3">
	<div class="card-header text-center">
		<h3>ABM - Auto</h3>
	</div>
	<div class="card-body">
		<table class="table table-striped">
		<thead class="table-primary">
		<tr>
			<th scope="col">Patente</th>
			<th scope="col" colspan="3">Marca</th>
			<th scope="col">Modelo</th>
			<th scope="col" colspan="2">DNI del propietario</th>
			<th scope="col">Editar</th>
			<th scope="col">Eliminar</th>
		</tr>
		</thead>
<?php	

if(count($listaAuto)>0){
	echo '<tbody class="table-group-divider">';
    foreach($listaAuto as $objAuto){ 
        echo '<tr><td>'.$objAuto->getPatente().'</td>';
		echo '<td colspan="3">'.$objAuto->getMarca().'</td>';
		echo '<td>'.$objAuto->getModelo().'</td>';
		echo '<td colspan="2">'.$objAuto->getDniDuenio().'</td>';
        echo '<td><a id="editar" class="btn btn-success" href="autoEditar.php?Patente='.$objAuto->getPatente().'">editar</a></td>';
        echo '<td><a id="eliminar" class="btn btn-danger" href="accion/abmAuto.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
	}
	echo "</tbody>";
}
?>
</table></div>
<div class="container text-center mb-3">
<a class="btn btn-primary p-2" href="autoNuevo.php">Ingresar un auto</a>
<a class="btn btn-primary p-2" href="buscarAuto.php">Buscar un auto</a>
</div>
</div>
<?php include_once './estructura/footer.php';?>