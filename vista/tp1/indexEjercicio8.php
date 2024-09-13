<?php
$numeroEjercicio = 8;
include_once '../estructura/tp1/header.php';
?>
<div align="center">
    <form name="form" method="get" action="../accion/tp1/actionEjercicio8.php">
        <input type="number" id="edad" name="edad" required placeholder="Ingrese su edad"/></br>
        <select name="estudiante" id="estudiante">
            <option value="es estudiante">Soy estudiante</option>
            <option value="no es estudiante" selected>No soy estudiante</option>
        </select></br>
        <input type="submit" value="Enviar" name="submit"/>
    </form>
</div>
<?php
include_once '../estructura/tp1/footer.php';
?>