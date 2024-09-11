<?php
include_once (__DIR__.'/../estructura/header_accion.php');
include_once (__DIR__.'/../../control/AbmAuto.php');
include_once (__DIR__.'/../../utils/scripts.php');
include_once (__DIR__.'/../../modelo/Auto.php');
include_once (__DIR__.'/../../modelo/conector/BaseDatos.php');
$datos = datosRecibidos();
$obj = new AbmAuto();

/*foreach($datos as $key => $d){
    echo "\n".$key." : ".$d."\n";
} */
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