<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
$auto = new AbmAuto();
$persona = new AbmPersona();

$listaAuto = $auto->buscar(null);
?>
<div class="card m-3">
	<div class="card-header text-center">
		<h3>Ver Autos</h3>
	</div>
	<div class="card-body">
		
<?php	

if(count($listaAuto)>0){
	echo '<table class="table table-striped">
		<thead class="table-primary">
		<tr>
			<th scope="col">Patente</th>
			<th scope="col" colspan="3">Marca</th>
			<th scope="col">Modelo</th>
			<th scope="col" colspan="2">DNI del propietario</th>
			<th scope="col" colspan="2">Nombre Dueño</th>
			<th scope="col" colspan="2">Apellido Dueño</th>
			<th scope="col">Editar datos</th>
			<th scope="col">Eliminar</th>
		</tr>
		</thead>';
	echo '<tbody class="table-group-divider">';
    foreach($listaAuto as $objAuto){ 
		$dniDuenio ['NroDni'] = $objAuto->getDniDuenio();
		$datosPersona = $persona->buscar($dniDuenio)[0];
        echo '<tr><td>'.$objAuto->getPatente().'</td>';
		echo '<td colspan="3">'.$objAuto->getMarca().'</td>';
		echo '<td>'.$objAuto->getModelo().'</td>';
		echo '<td colspan="2">'.$objAuto->getDniDuenio().'</td>';
		echo '<td colspan="2">'.$datosPersona->getNombre().'</td>';
		echo '<td colspan="2">'.$datosPersona->getApellido().'</td>';
        echo '<td><a id="editar" class="btn btn-success" href="cambioDuenio.php?Patente='.$objAuto->getPatente().'">cambiar dueño</a></td>';
		echo '<td><button type="button" class="btn btn-danger" onclick="confirmarBorrar(\''.$objAuto->getPatente().'\', \'#confirmarEliminarAuto\',
			\'eliminarAuto\', \'insertarPatente\', \'../accion/tp4/accionAuto.php?accion=borrar&Patente=\')">borrar</button></td></tr>';
	}
	echo "</tbody></table>";
}else{
	echo '<div class="container text-center">No hay autos cargados</div>';
}
?>
</div>
<div class="container text-center mb-3">
		<a class="btn btn-primary p-2" href="nuevoAuto.php">Ingresar un auto</a>
		<a class="btn btn-primary p-2" href="buscarAuto.php">Buscar un auto</a>
	</div>
</div>
<div class="modal fade" tabindex="-1" id="confirmarEliminarAuto">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5">Eliminar de la base de datos</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<span>Esta seguro que desea eliminar de la base de datos a la persona con DNI: <span class="text-body bg-warning text-decoration-none px-1" id="insertarPatente"></span></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				<a id="eliminarAuto" class="btn btn-success">Confirmar eliminacion</a>
			</div>
		</div>
  </div>
</div>
	
</div>

<?php include_once '../estructura/footer.php';?>