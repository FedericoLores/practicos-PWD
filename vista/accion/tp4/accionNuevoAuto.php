<?php
include_once ('../../estructura/tp4/header_accion.php');
include_once('../../../configuracion.php');
$datos = datosRecibidos();
$obj = new AbmAuto();
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
if(isset($datos['accion'])){
    $resp = false;
    $crearPersona = false;
    $mensaje = "";
    if($datos['accion']=='nuevo'){
        if(count($persona->buscar($datos)) != null){
            if($obj->alta($datos)){
                $resp =true;
            }
        }else {
            $crearPersona = true;
        }
        
    }
    if($resp){
        $mensaje .= " La accion ".$datos['accion']." se realizo correctamente.";
    }else {
        //print_r($datos);
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
    <?php if($crearPersona){ ?>
        <div class="row">
            <div class="col offset-md-1">
                <span>No se ha encontrado persona con ese dni en la base de datos</span>
                <div class="col">
                    
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="row mt-2">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/autoNuevo.php">Volver</a>
            <?php if($crearPersona){ ?>
                <a class="btn btn-success" href="../../tp4/personaNuevo.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../estructura/footer.php';?>