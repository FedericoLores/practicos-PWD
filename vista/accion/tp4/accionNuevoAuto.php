<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 7 (nuevo auto)";
$descripcion = "Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
“accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
control antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../../estructura/headerAccion.php');
include_once('../../../configuracion.php');
$datos = datosRecibidos();
$auto = new AbmAuto();
$persona = new AbmPersona();
if(isset($datos['accion'])){
    $titulo = $datos['accion'];
}else{
    $titulo = "Error";
}
?>
<div class="card m-3">
    <div class="card-header text-center">
        <h3><?php echo $titulo." auto";?></h3>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col offset-md-1 bg-danger">
    <!-- espacio para mensaje de debug recibido-->
<?php
if($titulo != "Error" && $auto->seteadosCamposClaves($datos)){
    $resp = false;
    $crearPersona = false;
    $mensaje = "";
    if($datos['accion']=='nuevo'){
        if(count($persona->buscar($datos)) != null){
            if($auto->alta($datos)){
                $resp =true;
            }
        }else {
            $crearPersona = true;
        }
    }
    if($resp){
        $mensaje .= " La accion ".$datos['accion']." se realizo correctamente.";
    }else {
        $mensaje .= " La accion ".$datos['accion']." no pudo concretarse.";
    }
}else{
    $mensaje = "Accion invalida";
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
    <?php if($titulo != "Error" && $crearPersona){
        echo'<div class="row">
            <div class="col offset-md-1">
                <span>No se ha encontrado persona con ese dni en la base de datos</span>
            </div>
        </div>';} ?>
    <div class="row mt-2">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/nuevoAuto.php">Volver</a>
            <?php if($titulo != "Error" && $crearPersona){ ?>
                <a class="btn btn-success" href="../../tp4/nuevaPersona.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../estructura/footer.php';?>