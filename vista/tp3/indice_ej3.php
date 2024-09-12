<?php include_once("./estructura/header.php")?>
<!-- boton modal -->
<div class="d-flex justify-content-center p-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cine">abrir formulario</button>
</div>

<!-- modal cine -->
<div id="cine" class="modal"  role="dialog">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h5><i class="bi bi-pencil-square"></i>Cinem@s</h5>    
            </div>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <form class="needs-validation" novalidate id="cinemaForm" name="cinemaForm" method="post" action="./accion/subir_ej3.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="titulo" class="form-label fw-bold">T&iacute;tulo</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="T&iacute;tulo" required/>
                            <div class="invalid-feedback">Por favor ingrese un t&iacute;tulo</div>
                        </div>
                        <div class="col-md-6">
                            <label for="actores" class="form-label fw-bold">Actores</label>
                            <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required/>
                            <div class="invalid-feedback">Por favor ingrese actores</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="director" class="form-label fw-bold">Director</label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director" required/>
                            <div class="invalid-feedback">Por favor ingrese un director</div>
                        </div>
                        <div class="col-md-6">
                            <label for="guion" class="form-label fw-bold">Gui&oacute;n</label>
                            <input type="text" class="form-control" id="guion" name="guion" placeholder="Gui&oacute;n" required/>
                            <div class="invalid-feedback">Por favor ingrese un gui&oacute;n</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="produccion" class="form-label fw-bold">Producci&oacute;n</label>
                            <input type="text" class="form-control" id="produccion" name="produccion" required/>
                            <div class="invalid-feedback">Por favor ingrese una producci&oacute;n</div>
                        </div>
                        <div class="col-md-2">
                            <label for="anio" class="form-label fw-bold">A&ntilde;o</label>
                            <input max="9999" type="number" class="form-control" id="anio" name="anio" required/>
                            <div class="invalid-feedback">Por favor ingrese un a&ntilde;o</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nacionalidad" class="form-label fw-bold">Nacionalidad</label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required/>
                            <div class="invalid-feedback">Por favor ingrese una nacionalidad</div>
                        </div>
                        <div class="col-md-4">
                            <label for="genero" class="form-label fw-bold">G&eacute;nero</label>
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
                            <label for="duracion" class="form-label fw-bold">Duraci&oacute;n</label>
                            <input type="number" max="999" class="form-control" id="duracion" name="duracion" required/>
                            <div class="invalid-feedback">Por favor ingrese una duraci&oacute;n</div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-label fw-bold">Restricciones de edad</div>
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
                            <label for="archivo" class="form-label mt-3 fw-bold">Imagen</label>
                            <div class="input-group mb-3">
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                                <input type="file" class="form-control rounded" name="imagen" id="imagen" accept=".jpg,.jpeg,.png,.gif" required>
                                <div class="invalid-feedback" id="errorSubida">por favor ingrese una imagen.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="sinopsis" class="form-label fw-bold">Sinopsis</label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" required></textarea>
                            <div class="invalid-feedback">Por favor ingrese una sinopsis</div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-row-reverse p-2">
                        <input type="reset" class="btn btn-light m-1" value="Borrar">
                        <input type="submit" class="btn btn-primary m-1" value="Enviar">          
                    </div>
                </form>                


            </div>
        </div>
    </div>
  </div>
</div>

    <script>

        //seleccionamos el formulario
        var formulario = document.getElementById("cinemaForm")
        //definimos un evento para validar
        formulario.addEventListener('submit', evento => {
            if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
                event.preventDefault()
                event.stopPropagation()
                }
            formulario.classList.add('was-validated')
        })

        

        document.getElementById("cinemaForm").addEventListener("submit", function(event){
            var inputArchivo = document.getElementById("imagen");
            var archivoPath = inputArchivo.value;
            var archivo = inputArchivo.files[0];
            var extensiones = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            var maxTamaño = 2 * 1024 * 1024;//2mb
            var errorSubida = document.getElementById("errorSubida");
            if (!archivo) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'Debe seleccionar un archivo.';
                event.preventDefault();
                event.stopPropagation();
            } else if (!extensiones.exec(archivo.name)) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'El archivo debe ser imagen';
                event.preventDefault();
                event.stopPropagation();
            } else if (archivo.size > maxTamaño) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'El archivo no debe superar los 2MB.';
                event.preventDefault();
                event.stopPropagation();
            } else {
                inputArchivo.classList.remove('is-invalid');
                inputArchivo.classList.add('is-valid');
            }
        });
        
        var cineModal = new bootstrap.Modal("#cine")
        //mostramos el modal apenas carga la pagina
        window.addEventListener("DOMContentLoaded", () => {
            cineModal.show()
        })

    </script>
    
<?php include_once("./estructura/footer.php")?>