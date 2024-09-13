<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
$persona = new AbmPersona();
$datos = datosRecibidos();
$dni = "";
if ($persona->seteadosCamposClaves($datos)){
    $listaPersonas = $persona->buscar($datos);
    if (count($listaPersonas)==1){
        $dni = $datos['NroDni'];
    }
}
?>
<div class="card m-3">
<div class="card-title text-center mt-3">
    <h4>Autos Persona</h4>
</div>

<form method="post" action="../accion/tp4/accionAutosPersona.php" id="autosPersona" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label">Numero de DNI</label>
        <input id="NroDni" name ="NroDni" type="number" class="form-control" value="<?php echo $dni;?>" min="10000000" max="99999999" required/>
        <input id="accion" name ="accion" value="listar autos persona" type="hidden">
        <div class="row my-2">
            <div class="col mx-2">
                <a  class="btn btn-primary" href="listaPersonas.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-success mx-2" onclick="validar('autosPersona')" value="Enviar">
            </div>
        </div>
    </div>
	
</form>

</div>
<!--<input id="accion" name ="accion" value="nuevo" type="hidden">-->
<?php include_once '../estructura/footer.php';?>