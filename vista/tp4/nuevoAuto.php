<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
?>
<div class="card m-3">
<div class="card-header text-center mt-3">
<h4>Nuevo Auto</h4>
</div>
<div class="card-body">
<form method="post" action="../accion/tp4/accionNuevoAuto.php" id="formulario" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" name ="Patente" type="text" class="form-control" required/>
        <label for="Marca" class="form-label mt-2">Marca</label>
        <input id="Marca" name ="Marca" type="text" class="form-control" required/>
        <label for="Modelo" class="form-label mt-2">Modelo</label>
        <input id="Modelo" name ="Modelo" type="number" min="0" class="form-control" required/>
        <label for="NroDni" class="form-label mt-2">Dni del propietario</label>
        <input id="NroDni" name ="NroDni" type="number" class="form-control" required/>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a class="btn btn-secondary" href="verAutos.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-primary mx-2" onclick="validar()" value="Enviar">
            </div>
        </div>
        
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>