<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio";
$descripcion = "";
include_once ('../../estructura/headerAccion.php');
include_once('../../../configuracion.php');
$datos = datosRecibidos();
$auto = new AbmAuto();
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
$crearPersona = false;
if($titulo != "Error" && $auto->seteadosCamposClaves($datos)){
    $mensaje = "";
    if($datos['accion']=='borrar'){
        if($auto->baja($datos)){
                $mensaje .= " La eliminación se realizo correctamente.";
        }elseif(count($auto->buscar($datos)) > 0){
            $mensaje .= " Auto no encontrado.";
        }else{
            $mensaje .= " La eliminación no pudo concretarse.";
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
    <div class="row mt-2">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/verAutos.php">Volver</a>
            <?php if($crearPersona){ ?>
                <a class="btn btn-success" href="../../tp4/nuevaPersona.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../estructura/footer.php';?>