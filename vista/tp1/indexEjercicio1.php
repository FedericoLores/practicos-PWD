<?php
$numeroEjercicio = 1;
include_once '../estructura/tp1/header.php';
?>
<div align="center">
    <form name="form" id="form" method="post" action="../accion/tp1/actionEjercicio1.php">
        <label for="num">Numero:</label>
        <input type="num" id="num" name="num" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
</div>
<?php
include_once '../estructura/tp1/footer.php';
?>