<?php
$numeroEjercicio = 2;
include_once './estructura/header.php';
?>
    <style>
        th{
          border:1px solid black;
        }
    </style>
    <div align="center">
    <form name="form" method="get" action="./action/actionEjercicio2.php">
        <h3 style="text-align: center;">Carga horaria por dia de la semana</h3>
        <table style="width: 50%;">
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <tr>
                <!-- arreglar para que no acepte numeros negativos -->
                <td><input type="number" min="0" id="lunes" name="lunes" value="0"></td>
                <td><input type="number" min="0" id="martes" name="martes" value="0"></td>
                <td><input type="number" min="0" id="miercoles" name="miercoles" value="0"></td>
                <td><input type="number" min="0" id="jueves" name="jueves" value="0"></td>
                <td><input type="number" min="0" id="viernes" name="viernes" value="0"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Enviar" >
    </form>
    </div>
</body>
</html>
<?php
include_once './estructura/footer.php';
?>
