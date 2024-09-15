<?php
include_once ('../../estructura/tp4/header_accion.php');
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
if($titulo != "Error" && $datos['NroDni'] != ""){
    $resp = false;
    if($datos['accion']=='buscar'){
        if($busqueda = $persona->buscar($datos)){
            $resp =true;
        }
    }
    if($resp){
        $mensaje = "La busqueda se realizo correctamente.";
        $mensaje .= "<br>nombre: " . $busqueda[0]->getNombre() . "<br>apellido: " . $busqueda[0]->getApellido() . "<br>fecha de nacimiento: " . $busqueda[0]->getFechaNac() . "<br>Telefono: " . $busqueda[0]->getTelefono() . "<br>Domicilio: " . $busqueda[0]->getDomicilio();
        $mensaje = '
        <form method="post" action="actualizarDatosPersona.php" id="actualizarDatosPersona" class="needs-validation" novalidate>
            <div class="container">
                <label for="NroDni" class="form-label d-none">Numero de DNI</label>
                <input id="NroDni" class="form-control d-none" readonly name ="NroDni" required type="number" value="'. $busqueda[0]->getDni().'" min="10000000" max="99999999"/>
                <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
                <div class="col">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control mb-2" id="Apellido" name="Apellido" required value="' . $busqueda[0]->getApellido() .'" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" />
                <div class="invalid-feedback">Ingrese un apellido sin numeros o simbolos</div>
                </div>
                <div class="col">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control mb-2" id="Nombre" name="Nombre" required value="' . $busqueda[0]->getNombre() .'" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" />
                <div class="invalid-feedback">Ingrese un nombre sin numeros o simbolos</div>
                </div>
                <div class="col">
                <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control mb-2" id="fechaNac" name="fechaNac" required value="'. $busqueda[0]->getFechaNac() .'" min="1900-01-01" max="'.date("Y-m-d").'" />
                <div class="invalid-feedback">Ingrese una fecha válida</div>
                </div>
                <div class="col">
                <label for="Telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control mb-2" id="Telefono" name="Telefono" value="'. $busqueda[0]->getTelefono() .'" minlength="6" maxlength="11" pattern="^[0-9]+([\- ]?[0-9]+)?$" required />
                <div class="invalid-feedback">El telefono debe contener entre 6 y 10 digitos y no puede contener letras</div>
                </div>
                <div class="col">
                <label for="Domicilio" class="form-label">Domicilio</label>
                <input type="text" class="form-control mb-2" id="Domicilio" name="Domicilio" required value="'. $busqueda[0]->getDomicilio() .'" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s]+$" minlength="3" maxlength="50" />
                <div class="invalid-feedback">Ingrese un domicilio valido</div>
                </div>
                <input id="accion" name ="accion" value="editar" type="hidden">
                <div class="row my-2">
                    <div class="col mx-2">
                        <a href="../../tp4/listaPersonas.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                        <input type="submit" class="btn btn-primary" onclick="validar(\'actualizarDatosPersona\')" value="Remplazar datos">
                    </div>
                </div>
            </div>
        </form>';
    }else {
        $mensaje = "No se encontró una persona con el DNI: " .$datos['NroDni'] . '</div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-secondary" href="../../tp4/buscarPersona.php">Volver</a>';
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
</div>
</div>

<?php include_once ('../../estructura/footer.php');?>