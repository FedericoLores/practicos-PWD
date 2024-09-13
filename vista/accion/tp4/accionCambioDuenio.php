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
    $crearPersona = false;
    $mensaje = "";
    if($resultados = $obj->buscar($datos)){
        if($persona->buscar($datos)){
            $mensaje = "se encontro la persona";
            $datos['Marca'] = $resultados[0]->getMarca();
            $datos['Modelo'] = $resultados[0]->getModelo();
            if($obj->modificacion($datos)){
                $mensaje = "se actualizo correctamente";
            } else{
                $mensaje = "fallo la actualización de datos";
            }
        }else{
            $mensaje = "no se encontro la persona";
        } 
    }else{
        $mensaje = "no se encontro la patente";
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
            <a class="btn btn-secondary" href="../../tp4/verAutos.php">Volver</a>
            <?php if($crearPersona){ ?>
                <a class="btn btn-success" href="../../tp4/nuevaPersona.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../estructura/footer.php';?>