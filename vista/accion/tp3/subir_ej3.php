<?php 
    $titulo = "Trabajo práctico 3";
    $ejercicio = "Ejercicio 3";
    $descripcion = "Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les
    permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se
    deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario";
    include_once ('../../estructura/headerAccion.php');
    include_once("../../../control/tp3/control_ej3.php");
    include_once '../../../configuracion.php';
    $datos = datosRecibidos();
    $control = new Control_ej3();
    $mensaje = $control->revisarTodo();
    $img = $control->getDirectorioFile();
?>

    <div class="d-flex justify-content-center p-5">
        <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#resultado">Resultados</button>
        <a href="../../tp3/indice_ej3.php" class="btn btn-white mx-5 border" >Volver Atras</a>
    </div>

    <div id="resultado" class="modal bg-white">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-success bg-opacity-50 rounded">
                <div class="modal-header border-0 m-0 d-flex justify-content-between align-items-start">
                    <h2 class="text-primary text-opacity-75 mt-3">La pelicula introducida es</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                </div>
                
                <div class="modal-body">
                    <div >
                    
                        <div class="container">
                            <p class="text-success m-0"><span class="fw-bold">Titulo:</span> <?php echo $control->devolverDato($datos, "titulo"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Actores:</span> <?php echo $control->devolverDato($datos, "actores"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Director:</span> <?php echo $control->devolverDato($datos, "director"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Gui&oacute;n:</span> <?php echo $control->devolverDato($datos, "guion"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Producci&oacute;n:</span> <?php echo $control->devolverDato($datos, "produccion"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">A&ntilde;o:</span> <?php echo $control->devolverDato($datos, "anio"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Nacionalidad:</span> <?php echo $control->devolverDato($datos, "nacionalidad"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">G&eacute;nero:</span> <?php echo $control->devolverDato($datos, "genero"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Duraci&oacute;n:</span> <?php echo $control->devolverDato($datos, "duracion"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Restricciones de Edad:</span> <?php echo $control->devolverDato($datos, "restriccion"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Sinopsis:</span> <?php echo $control->devolverDato($datos, "sinopsis"); ?></p>
                            <p class="text-success m-0"><span class="fw-bold">Imagen:</span> <?php echo $mensaje; ?></p>
                            <div class="text-center">
                            <img class="img-fluid rounded-5 pt-2" src="<?php echo $img;?>">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var resultadoModal = new bootstrap.Modal("#resultado")
        //mostramos el modal apenas carga la pagina
        window.addEventListener("DOMContentLoaded", () => {
            resultadoModal.show()
        })
    </script>
<?php include_once("../../estructura/footer.php")?>