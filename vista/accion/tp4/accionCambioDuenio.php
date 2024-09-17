<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 8 (cambio dueño)";
$descripcion = "Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../../estructura/headerAccion.php');
include_once('../../../configuracion.php');
$datos = datosRecibidos();
$auto = new AbmAuto();
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
if($titulo != "Error" && $auto->seteadosCamposClaves($datos) && $persona->seteadosCamposClaves($datos)){
    $crearPersona = false;
    if($resultados = $auto->buscar($datos)){
        if($persona->buscar($datos)){
            $mensaje = "Se encontro la persona.</br>";
            $datos['Marca'] = $resultados[0]->getMarca();
            $datos['Modelo'] = $resultados[0]->getModelo();
            if($auto->modificacion($datos)){
                $mensaje .= "Se actualizo correctamente.</br>";
            } else{
                $mensaje .= "Fallo la actualización de datos.</br>";
            }
        }else{
            $mensaje = "No se encontro la persona.</br>";
        } 
    }else{
        $mensaje = "No se encontro la patente.</br>";
    }
}else{
    $mensaje = "Accion Invalida.</br>";
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
    <?php if($titulo != "Error" && $crearPersona){ ?>
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
            <?php if($titulo != "Error" && $crearPersona){ ?>
                <a class="btn btn-success" href="../../tp4/nuevaPersona.php">Ingresar persona en la base de datos</a>    
            <?php }?> 
        </div>
    </div>
</div>
</div>
<?php include_once '../../estructura/footer.php';?>