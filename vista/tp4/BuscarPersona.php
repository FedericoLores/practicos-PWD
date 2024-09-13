<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
?>

<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Buscar Persona</h4>
</div>
<div class="card-body">
<form method="post" action="../accion/tp4/accionBuscarPersona.php" class="needs-validation" novalidate>
	<div class="container">
        <label for="NroDni" class="form-label">DNI</label>
        <input id="NroDni" class="form-control" name ="NroDni" type="text"/>
        <input id="accion" name ="accion" value="buscar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/listaPersonas.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>