<?php
include_once (__DIR__.'/../estructura/header_accion.php');
include_once (__DIR__.'/../../control/AbmAuto.php');
include_once (__DIR__.'/../../utils/scripts.php');
include_once (__DIR__.'/../../modelo/Auto.php');
include_once (__DIR__.'/../../modelo/Persona.php');
include_once (__DIR__.'/../../modelo/conector/BaseDatos.php');
$datos = datosRecibidos();
$obj = new AbmAuto();

?>
<div class="card m-3">
    <div class="card-header text-center">
        <h3><?php echo $datos['accion']." auto";?></h3>
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
        $persona = new Persona();
        if(count($persona->listar("NroDni=".$datos['DniDuenio'])) != null){
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
        $mensaje .= " La accion ".$datos['accion']." no pudo concretarse.";
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
            <a class="btn btn-secondary" href="../indexAuto.php">Volver</a>
            <?php if($crearPersona){ ?>
                <a class="btn btn-success" href="../personaNuevo.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../vista/estructura/footer.php';?>