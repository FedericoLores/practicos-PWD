<?php 
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 4";
$descripcion = "Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
    tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.</br>
    - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
    aceptar números.</br>
    - El campo duración debe permitir un máximo de 3 números.</br>
    - Todos los datos son obligatorios.</br>
    - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
    formulario.</br>
    - El botón “Borrar” debe limpiar el formulario.";
include_once ('../estructura/header.php');?>
<!-- boton modal -->
<div class="d-flex justify-content-center p-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cine">abrir formulario</button>
</div>

<!-- modal cine -->
<div id="cine" class="modal" role="dialog">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            
            <div class="modal-title">
                <h5><i class="bi bi-pencil-square"></i>Cinem@s</h5>    
            </div>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                
                <form class="needs-validation" novalidate id="cinemaForm" name="cinemaForm" method="post" action="../accion/tp2/accion_ej4.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="titulo" class="form-label"><b>T&iacute;tulo</b></label>
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="T&iacute;tulo" minlength="2" maxlength="50" required/>
                            <div class="invalid-feedback">Por favor ingrese un t&iacute;tulo</div>
                        </div>
                        <div class="col-md-6">
                            <label for="actores" class="form-label"><b>Actores</b></label>
                            <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" pattern="^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ,.\s]+$" minlength="5" maxlength="300"  required/>
                            <div class="invalid-feedback">Por favor ingrese actores</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="director" class="form-label"><b>Director</b></label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director" pattern="^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*( [a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*)?( [a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*)?[-]?[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$" minlength="3" maxlenght="50" required/>
                            <div class="invalid-feedback">Por favor ingrese un director</div>
                        </div>
                        <div class="col-md-6">
                            <label for="guion" class="form-label"><b>Gui&oacute;n</b></label>
                            <input type="text" class="form-control" id="guion" name="guion" placeholder="Gui&oacute;n" minlength="10" maxlength="100000" required/>
                            <div class="invalid-feedback">Por favor ingrese un gui&oacute;n</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="produccion" class="form-label"><b>Producci&oacute;n</b></label>
                            <input type="text" class="form-control" id="produccion" name="produccion" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s]+$" minlength="3" maxlength="50" required/>
                            <div class="invalid-feedback">Por favor ingrese una producci&oacute;n</div>
                        </div>
                        <div class="col-md-2">
                            <label for="anio" class="form-label"><b>A&ntilde;o</b></label>
                            <input min="1800" max="<?php echo date("Y");?>" type="number" class="form-control" id="anio" name="anio" required/>
                            <div class="invalid-feedback">Por favor ingrese un a&ntilde;o</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nacionalidad" class="form-label"><b>Nacionalidad</b></label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" minlength="2" maxlength="50" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñü]+(?: [A-Za-zÁÉÍÓÚÑáéíóúñü]+)*$" required/>
                            <div class="invalid-feedback">Por favor ingrese una nacionalidad</div>
                        </div>
                        <div class="col-md-4">
                            <label for="genero" class="form-label"><b>G&eacute;nero</b></label>
                            <select name="genero" id="genero" class="form-select" required>
                                <option value="comedia">Comedia</option>
                                <option value="drama">Drama</option>
                                <option value="terror">Terror</option>
                                <option value="romantica">Romantica</option>
                                <option value="suspenso">Suspenso</option>
                                <option value="otra">Otra</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione un g&eacute;nero</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="duracion" class="form-label"><b>Duraci&oacute;n</b></label>
                            <input type="number" min="0" max="999" class="form-control" id="duracion" name="duracion" required/>
                            <div class="invalid-feedback">Por favor ingrese una duraci&oacute;n</div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-label"><b>Restricciones de edad</b></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="todoPublico" value="apta para todo publico" required/>
                                <label class="form-check-label" for="todoPublico">Todos los p&uacute;blicos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="mayor7" value="mayores a 7" required/>
                                <label class="form-check-label" for="mayor7">Mayores de 7 a&ntilde;os</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="adultos" value="adultos" checked required/>
                                <label class="form-check-label" for="adultos">Mayores de 18 a&ntilde;os</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="sinopsis" class="form-label"><b>Sinopsis</b></label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" required></textarea>
                            <div class="invalid-feedback">Por favor ingrese una sinopsis</div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-row-reverse p-2">
                        <input type="reset" class="btn btn-light m-1" value="Borrar">
                        <input type="submit" onclick="validar('cinemaForm')" class="btn btn-primary m-1" value="Enviar">          
                    </div>
                </form>                


            </div>
        </div>
    </div>
  </div>
</div>

    <script>
        var cineModal = new bootstrap.Modal("#cine")
        //mostramos el modal apenas carga la pagina
        window.addEventListener("DOMContentLoaded", () => {
            cineModal.show()
        })

    </script>
    
<?php include_once("../estructura/footer.php")?>