<?php
$numeroEjercicio = 1;
include_once './estructura/header.php';
?>
<div align="center">
    <form name="form" id="form" method="post" action="./action/actionEjercicio1.php">
        <label for="num">Numero:</label>
        <input type="text" id="num" name="num">
        <input type="submit" name="submit" value="Enviar">
    </form>
</div>
<?php
include_once './estructura/footer.php';
?>