<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 6 (nueva persona)";
$descripcion = "Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../../estructura/headerAccion.php');
include_once('../../../configuracion.php');
$datos = datosRecibidos();
$persona = new AbmPersona();
if(isset($datos['accion'])){
    $titulo = $datos['accion'];
}else{
    $titulo = "Error";
}
?>
<div class="card m-3">
    <div class="card-header text-center">
        <h3><?php echo $titulo;?></h3>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col offset-md-1 bg-danger">
        <!-- espacio para mensaje de debug recibido-->
<?php
if($titulo != "Error"){
    $resp = false;
    if($datos['accion']=='nuevo'){
        if(count($persona->buscar($datos)) <= 0){
            if($persona->alta($datos)){
                $mensaje = "La creacion de ".$datos['Nombre']." se realizo correctamente.";
            }else{
                $mensaje = "La creacion no pudo concretarse.";
            }
        }else{
            $mensaje = "Ya existe una persona con el dni: " . $datos['NroDni'];
        }
    }
}else{
    $mensaje = "Accion Invalida.";
}
?>
</div>
</div>
<div class="row">
        <div class="col offset-md-1">
            <?php	
            echo $mensaje;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/listaPersonas.php">Volver</a>
        </div>
    </div>
</div>
</div>

<?php include_once '../../estructura/footer.php';?>