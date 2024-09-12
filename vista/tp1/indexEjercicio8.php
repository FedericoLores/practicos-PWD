<?php
$numeroEjercicio = 8;
include_once './estructura/header.php';
?>
<div align="center">
    <form name="form" method="get" action="./action/actionEjercicio8.php">
        <input type="number" id="edad" name="edad" placeholder="Ingrese su edad"/></br>
        <select name="estudiante" id="estudiante">
            <option value="es estudiante">Soy estudiante</option>
            <option value="no es estudiante" selected>No soy estudiante</option>
        </select></br>
        <input type="submit" value="Enviar" name="submit"/>
    </form>
</div>
<?php
include_once './estructura/footer.php';
?>