<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
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
			<th scope="col">Editar datos</th>
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
        echo '<td><a id="editar" class="btn btn-success" href="cambioDuenio.php?Patente='.$objAuto->getPatente().'">cambiar dueño</a></td>';
        echo '<td><a id="eliminar" class="btn btn-danger" href="../accion/tp4/accionAuto.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
	}
	echo "</tbody>";
}else{
	echo '<tr><td class="container text-center">No hay autos cargados</td></tr>';
}
?>
</table></div>
<div class="container text-center mb-3">
<a class="btn btn-primary p-2" href="nuevoAuto.php">Ingresar un auto</a>
<a class="btn btn-primary p-2" href="buscarAuto.php">Buscar un auto</a>
</div>
</div>
<?php include_once '../estructura/footer.php';?>