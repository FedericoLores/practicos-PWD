<?php 
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 3";
$descripcion = "Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
y la password para loguearse. Los datos del formulario son enviados a un script
verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
y en caso contrario un mensaje de error. ";
include_once ('../../estructura/headerAccion.php');
?>
    <div class="container p-1">
        <?php
            include_once("../../../control/tp2/control_ej3.php");
            include_once '../../../configuracion.php';
            $control = new Control_ej3();

            //aca se revisan los datos
            $datos = datosRecibidos();

            $control->cargarUsuarios();
            $mensaje = $control->revisar($datos);
            $color = "danger";
            if($mensaje[0]){
                $color = "success";
            }
            ?>
        <div class="container rounded bg-<?php echo $color;?>">
            <p class="text-white p-3"><?php echo $mensaje[1];?></p>
        </div>
    </div>
<?php include_once("../../estructura/footer.php")?>