<?php
$numeroEjercicio = "3 a 6";
include_once '../estructura/tp1/header.php';
?>
<div align="center">
    <form name="form" method="get" action="../accion/tp1/actionEjercicio3-6.php">
        Nombre: <input style="margin: 5px; border-color: lightgray;" type="text" id="name" name="name" placeholder="Nombre" required/></br>
        Apellido: <input style="margin: 5px; border-color: lightgray;" type="text" id="apellido" name="apellido" placeholder="Apellido" required/></br>
        Edad: <input style="margin: 5px; border-color: lightgray;" type="number" min="0" id="age" name="age" placeholder="Edad" required/></br>
        Direccion: <input style="margin: 5px; border-color: lightgray;" type="text" id="direccion" name="direccion" placeholder="Direccion" required/></br>
        Nivel de estudios</br>
        <input type="radio" id="noTiene" name="estudios" value="no tengo" checked/>
        <label for="noTiene">No tiene</label></br>
        <input type="radio" id="primarios" name="estudios" value="primarios"/>
        <label for="primarios">Estudios primarios</label></br>
        <input type="radio" id="secundarios" name="estudios" value="secundarios"/>
        <label for="secundarios">Estudios secundarios</label></br>
        Sexo</br>
        <input type="radio" id="femenino" name="sexo" value="femenino" checked/>
        <label for="femenino">Femenino</label></br>
        <input type="radio" id="masculino" name="sexo" value="masculino"/>
        <label for="masculino">Masculino</label></br>
        Seleccione que deportes practica:</br>
        <input type="checkbox" name="deportes[]" value="Futbol" id="futbol"/>
        <label for="futbol">Futbol</label></br>
        <input type="checkbox" name="deportes[]" value="Basket" id="basket"/>
        <label for="basket">Basket</label></br>
        <input type="checkbox" name="deportes[]" value="Tennis" id="tennis"/>
        <label for="tennis">Tennis</label></br>
        <input type="checkbox" name="deportes[]" value="Voley" id="voley"/>
        <label for="voley">Voley</label></br>
        </br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</div>

<?php
include_once '../estructura/tp1/footer.php';
?>