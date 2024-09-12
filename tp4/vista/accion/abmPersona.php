<?php
include_once (__DIR__.'/../estructura/header_accion.php');
include_once (__DIR__.'/../../control/AbmPersona.php');
include_once (__DIR__.'/../../utils/scripts.php');
include_once (__DIR__.'/../../modelo/Persona.php');
include_once (__DIR__.'/../../modelo/conector/BaseDatos.php');
$datos = datosRecibidos();
$obj = new AbmPersona();

?>
<div class="card m-3">
    <div class="card-header text-center">
        <h3><?php echo $datos['accion'];?></h3>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col offset-md-1 bg-danger">
        <!-- espacio para mensaje de debug recibido-->
<?php
if(isset($datos['accion'])){
    $resp = false;
    if($datos['accion']=='editar'){
        if($obj->modificacion($datos)){
            $resp = true;
        }
    }
    if($datos['accion']=='borrar'){
        if($obj->baja($datos)){
            $resp =true;
        }
    }
    if($datos['accion']=='nuevo'){
        if($obj->alta($datos)){
            $resp =true;
        }
    }
    if($resp){
        $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
    }else {
        $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
    }
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
            <a class="btn btn-secondary" href="../indexPersona.php">Volver</a>
        </div>
    </div>
</div>
</div>

<?php include_once '../../vista/estructura/footer.php';?>