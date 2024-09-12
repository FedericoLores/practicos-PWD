<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmPersona.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../modelo/Persona.php');
$objAbmPersona = new AbmPersona();

$listaPersona = $objAbmPersona->buscar(null);
?>
<div class="card m-3">
	<div class="card-header text-center">
		<h3>ABM - Persona</h3>
	</div>
<div class="card-body">
	<table class="table table-striped">
	<thead class="table-primary">
	<tr>
		<th scope="col">Numero de DNI</th>
		<th scope="col">Apellido</th>
		<th scope="col">Nombre</th>
		<th scope="col">Fecha de nacimiento</th>
        <th scope="col">Telefono</th>
        <th scope="col">Domicilio</th>
		<th scope="col">Editar</th>
		<th scope="col">Eliminar</th>
	</tr>
	</thead>
<?php	

if(count($listaPersona)>0){
	echo '<tbody class="table-group-divider">';
    foreach($listaPersona as $objPersona){ 
        echo '<tr><td>'.$objPersona->getDni().'</td>';
		echo '<td>'.$objPersona->getApellido().'</td>';
		echo '<td>'.$objPersona->getNombre().'</td>';
		echo '<td>'.$objPersona->getFechaNac().'</td>';
        echo '<td>'.$objPersona->getTelefono().'</td>';
		echo '<td>'.$objPersona->getDomicilio().'</td>';
        echo '<td><a class="btn btn-success" href="personaEditar.php?NroDni='.$objPersona->getDni().'">editar</a></td>';
        echo '<td><a class="btn btn-danger" href="accion/abmPersona.php?accion=borrar&NroDni='.$objPersona->getDni().'">borrar</a></td></tr>'; 
	}
	echo "</tbody>";
}

?>
</table>
<div class="container text-center mb-3">
	<a class="btn btn-primary p-2" href="personaNuevo.php">Ingresar una persona</a>
</div>
</div>
</div>
<?php include_once './estructura/footer.php';?>