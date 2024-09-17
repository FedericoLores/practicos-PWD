<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 5 (lista personas)";
$descripcion = 'Crear una página "listaPersonas.php" que muestre un listado con las personas que se
encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.';
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
                <div class="container mb-2 text-center">mostrando resultados para DNI: ' . $datos['NroDni'] . '</div>
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