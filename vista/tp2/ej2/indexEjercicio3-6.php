<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-3 a 6";
$descripcion = "Crear una página php que contenga un formulario HTML, enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido y vivo en dirección”, usando la información recibida. Se muestran mensajes distintos dependiendo si la
persona es mayor de edad o no. Se ingresa el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo. Permite seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la CANTIDAD de deportes que practica";
include_once '../../estructura/headerEj2Tp2.php';
?>
<div class="container mt-3">
    <form name="saludo" id="saludo" method="get" class="needs-validation" novalidate action="../../accion/tp2/ej2/actionEjercicio3-6.php">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" required />
                    <div class="invalid-feedback">Ingrese su nombre</div>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" required />
                    <div class="invalid-feedback">Ingrese su apellido</div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Edad</label>
                    <input type="number" min="0" class="form-control" id="age" name="age" min="3" max="150" required />
                    <div class="invalid-feedback">Ingrese su edad</div>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s]+$" minlength="3" maxlength="50" required />
                    <div class="invalid-feedback">Ingrese su direccion</div>
                </div>
                <fieldset class="mb-3">
                    <legend>Estudios</legend>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="noTiene" name="estudios" value="no tengo" required checked />
                        <label for="noTiene" class="form-check-label">No tiene</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="primarios" name="estudios" value="primarios" required />
                        <label for="primarios" class="form-check-label">Estudios primarios</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="secundarios" name="estudios" value="secundarios" required />
                        <label for="secundarios" class="form-check-label">Estudios secundarios</label>
                    </div>
                </fieldset>
                <fieldset class="mb-3">
                    <legend>Sexo</legend>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="femenino" name="sexo" value="femenino" required checked />
                        <label for="femenino" class="form-check-label">Femenino</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="masculino" name="sexo" value="masculino" required />
                        <label for="masculino" class="form-check-label">Masculino</label>
                    </div>
                </fieldset>
                <fieldset class="mb-3">
                    <legend>Deportes</legend>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="deportes[]" value="Futbol" id="futbol" />
                        <label for="futbol" class="form-check-label">Futbol</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="deportes[]" value="Basket" id="basket" />
                        <label for="basket" class="form-check-label">Basket</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="deportes[]" value="Tennis" id="tennis" />
                        <label for="tennis" class="form-check-label">Tennis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="deportes[]" value="Voley" id="voley" />
                        <label for="voley" class="form-check-label">Voley</label>
                    </div>
                </fieldset>
                <div class="mb-3">
                    <button type="submit" name="submit" onclick="validar('saludo')" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../estructura/footer.php';
?>
