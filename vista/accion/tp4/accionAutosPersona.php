<?php
include_once ('../../estructura/tp4/header_accion.php');
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
        <h3><?php echo $titulo;?></h3>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col offset-md-1 bg-danger">
    <!-- espacio para mensaje de debug recibido-->
    </div>
    </div>
    <?php
    if($titulo != "Error" && $persona->seteadosCamposClaves($datos)){
        $busqueda = $auto->buscarPersona($datos);
        if(count($busqueda)>0){
            echo '<table class="table table-striped">
                <thead class="table-primary">
                <div class="container mb-2 text-center">mostrando resultados para DNI:' . $datos['NroDni'] . '</div>
                <tr>
                    <th scope="col">Patente</th>
                    <th scope="col" colspan="3">Marca</th>
                    <th scope="col">Modelo</th>
                </tr>
                </thead>';
            echo '<tbody class="table-group-divider">';
            foreach($busqueda as $auto){ 
                echo '<tr><td>'.$auto->getPatente().'</td>';
                echo '<td colspan="3">'.$auto->getMarca().'</td>';
                echo '<td>'.$auto->getModelo().'</td>';
            }
            echo "</tbody></table>";
        }else{
            echo '<p class="container text-center">No se encontró un auto a nombre del DNI: ' . $datos['NroDni'] .' </p>';
        }
    }else{
        $mensaje = "Accion Invalida.";
    }
    ?>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/autosPersona.php">Volver</a>
        </div>
    </div>
</div>
</div>
<?php include_once ('../../estructura/footer.php');?>