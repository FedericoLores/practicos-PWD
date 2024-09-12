<?php include_once("../estructura/header_accion.php")?>
    <div class="container p-1">
        <?php
            include_once("../../control/control_ej3.php");
            include_once("../utils/scripts.php");
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
<?php include_once("../estructura/footer.php")?>