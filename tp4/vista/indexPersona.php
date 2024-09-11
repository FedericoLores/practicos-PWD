<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmPersona.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../modelo/Persona.php');
$objAbmPersona = new AbmPersona();

$listaPersona = $objAbmPersona->buscar(null);
?>
<div class="container"><h3>ABM - Persona</h3>
<a href="personaNuevo.php">Ingresar una persona</a></div>
<div class="container"><table class="table table-sm">
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
<?php	

if(count($listaPersona)>0){
    foreach($listaPersona as $objPersona){ 
        echo '<div class="row"><div class="col"><tr><td>'.$objPersona->getDni().'</td></div>';
		echo '<div class="col"><td>'.$objPersona->getApellido().'</td></div>';
		echo '<div class="col"><td>'.$objPersona->getNombre().'</td></div>';
		echo '<div class="col"><td>'.$objPersona->getFechaNac().'</td></div>';
        echo '<div class="col"><td>'.$objPersona->getTelefono().'</td></div>';
		echo '<div class="col"><td>'.$objPersona->getDomicilio().'</td></div>';
        echo '<div class="col"><td><a href="personaEditar.php?NroDni='.$objPersona->getDni().'">editar</a></td></div>';
        echo '<div class="col"><td><a href="accion/abmPersona.php?accion=borrar&NroDni='.$objPersona->getDni().'">borrar</a></td></tr></div></div>'; 
	}
}

?>
</table></div>
<?php include_once './estructura/footer.php';?>