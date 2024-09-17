<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio";
$descripcion = "";
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
if($titulo != "Error" && $persona->seteadosCamposClaves($datos)){
        if($datos['accion']=='borrar'){
            if($resp = $persona->baja($datos) == 1){
                $mensaje = "La eliminación de ".$datos['NroDni']. " se realizo correctamente.";
            }elseif($resp == 0){
                if(count($persona->buscar($datos)) > 0){
                    $mensaje = "No se puede eliminar a ". $datos['NroDni'].". Tiene uno o mas autos a su nombre.";
                }else{
                    $mensaje = "Persona no encontrada.";
                }
            }else{
                $mensaje = "La eliminación falló.";
            }
        }
}else{
    $mensaje ="Accion Invalida.";
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
            <a class="btn btn-secondary mt-2" href="../../tp4/listaPersonas.php">Volver</a>
        </div>
    </div>
</div>
</div>

<?php include_once '../../estructura/footer.php';?>