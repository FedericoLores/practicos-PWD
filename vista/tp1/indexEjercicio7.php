<?php
$numeroEjercicio = 7;
include_once './estructura/header.php';
?>
<div align="center">
    <form name="form" method="get" action="./action/actionEjercicio7.php">
        <input type="number" id="num1" name="num1" placeholder="Ingrese un n&uacute;mero"/></br>
        <input type="number" id="num2" name="num2" placeholder="Ingrese otro n&uacute;mero"/></br>
        <select name="operacion" id="operacion">
            <option value="suma" selected>Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
        </select>
        <input type="submit" value="Enviar" name="submit"/>
    </form>
</div>
<?php
include_once './estructura/footer.php';
?>