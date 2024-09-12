<?php
include_once (__DIR__.'/../estructura/header_accion.php');
include_once (__DIR__.'/../../control/AbmAuto.php');
include_once (__DIR__.'/../../utils/scripts.php');
include_once (__DIR__.'/../../modelo/Auto.php');
include_once (__DIR__.'/../../modelo/conector/BaseDatos.php');
$datos = datosRecibidos();
$auto = new AbmAuto();

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
    if($datos['accion']=='buscar'){
        if($busqueda = $auto->buscar($datos)){
            $resp =true;
        }
    }
    if($resp){
        $mensaje = "La busqueda se realizo correctamente.";
        $mensaje .= "<br>patente: " . $busqueda[0]->getPatente() . "<br>marca: " . $busqueda[0]->getMarca() . "<br>modelo: " . $busqueda[0]->getModelo() . "<br>DNI del dueño: " . $busqueda[0]->getDniDuenio();

    }else {
        $mensaje = "No se encontró un auto con la patente: " .$datos['Patente'];
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
            <a class="btn btn-secondary" href="../buscarAuto.php">Volver</a>
        </div>
    </div>
</div>
</div>
<?php include_once '../../vista/estructura/footer.php';?>