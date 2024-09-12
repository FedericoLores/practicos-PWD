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
<div class="card m-3">
<div class="card-title text-center mt-3">
    <h4>Editar Persona</h4>
</div>
<?php if ($obj!=null){?>
<div class="container">
Numero de DNI: <a class="text-body bg-warning text-decoration-none px-1"><?php echo $obj->getDni()?></a>
</div>
<form method="post" action="accion/abmPersona.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label d-none">Numero de DNI</label>
        <input id="NroDni" class="form-control d-none" readonly name ="NroDni" required type="text" value="<?php echo $obj->getDni()?>"/>
        <label for="Apellido" class="form-label mt-2">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" required value="<?php echo $obj->getApellido()?>"/>
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control mt-2" id="Nombre" name="Nombre" required value="<?php echo $obj->getNombre()?>"/>
        <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control mt-2" id="fechaNac" name="fechaNac" required value="<?php echo $obj->getFechaNac()?>"/>
        <label for="Telefono" class="form-label">Telefono</label>
        <input type="tel" class="form-control mt-2" id="Telefono" name="Telefono" required value="<?php echo $obj->getTelefono()?>"/>
        <label for="Domicilio" class="form-label">Domicilio</label>
        <input type="text" class="form-control mt-2" id="Domicilio" name="Domicilio" required value="<?php echo $obj->getDomicilio()?>"/>
        <input id="accion" name ="accion" value="editar" type="hidden">
        <div class="row my-2">
            <div class="col mx-2">
                <a href="indexPersona.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" class="btn btn-primary" onclick="validar()">
            </div>
        </div>
        
    </div>
</form>
<?php 
}else{
    echo '<p class="container">No se encontro la clave que desea modificar<p>';
    echo '<div class="container text-center mb-2"><a href="indexPersona.php" class="btn btn-secondary mx-2">Volver</a></div>';
}?>
</div>

<?php include_once '../vista/estructura/footer.php';?>