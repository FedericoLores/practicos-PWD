<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 9 (buscar persona)";
$descripcion = "Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.";
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
    if(count($persona->buscar($datos)) > 0){
        $datosAnteriores = $persona->buscar($datos);
        if($persona->comparar($datos,$datosAnteriores)){
            $mensaje = "No se ha modificado ningun dato.";
        }else{
            if($persona->modificacion($datos)){
                $mensaje = "La edición se realizo correctamente.";
            }else{
                $mensaje = "La edición no pudo concretarse.";
            }
        }
    }else{
        $mensaje = "No existe la persona.";
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