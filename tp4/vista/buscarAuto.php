<?php
include_once (__DIR__.'/estructura/header.php');
include_once (__DIR__.'/../control/AbmAuto.php');
?>

<div class="card m-3">
<div class="card-title text-center mt-3">
    <h4>Buscar Auto</h4>
</div>
<div class="card-body">
<form method="post" action="accion/accionBuscarAuto.php" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text"/>
        <input id="accion" name ="accion" value="buscar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="indexAuto.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../vista/estructura/footer.php';?>