<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmPersona.php');
include_once (__DIR__.'/../modelo/conector/BaseDatos.php');
include_once (__DIR__.'/../utils/scripts.php');

$objAbmPersona = new AbmPersona();
$datos = datosRecibidos();
$obj =NULL;
if (isset($datos['NroDni'])){
    $listaPersona = $objAbmPersona->buscar($datos);
    if (count($listaPersona)==1){
        $obj= $listaPersona[0];
    }
}

?>	
<h3>Persona</h3>
<?php if ($obj!=null){?>
<form method="post" action="accion/abmPersona.php">
	<div class="container">
        <label for="NroDni" class="form-label">Numero de DNI</label>
        <input id="NroDni" class="form-control" readonly name ="NroDni" type="text" value="<?php echo $obj->getDni()?>"/>
        <label for="Apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo $obj->getApellido()?>"/>
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $obj->getNombre()?>"/>
        <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="<?php echo $obj->getFechaNac()?>"/>
        <label for="Telefono" class="form-label">Telefono</label>
        <input type="tel" class="form-control" id="Telefono" name="Telefono" value="<?php echo $obj->getTelefono()?>"/>
        <label for="Domicilio" class="form-label">Domicilio</label>
        <input type="text" class="form-control" id="Domicilio" name="Domicilio" value="<?php echo $obj->getDomicilio()?>"/>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <input type="submit" class="btn btn-success m-2">
    </div>
</form>
<?php 
}else{
    echo "<p>No se encontro la clave que desea modificar";
}?>
<div class="container">
    <a href="indexPersona.php"><input type="button" class="btn btn-primary m-2" value="Volver"/></a>
</div>