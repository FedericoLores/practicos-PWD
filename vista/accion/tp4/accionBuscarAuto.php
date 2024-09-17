<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 4 (buscar auto)";
$descripcion = 'Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.';
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
        <h3><?php echo $titulo;?></h3>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col offset-md-1 bg-danger">
    <!-- espacio para mensaje de debug recibido-->
<?php
if($titulo != "Error" && $auto->seteadosCamposClaves($datos)){
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
            <a class="btn btn-secondary" href="../../tp4/buscarAuto.php">Volver</a>
        </div>
    </div>
</div>
</div>
<?php include_once ('../../estructura/footer.php');?>