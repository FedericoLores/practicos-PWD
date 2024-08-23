<?php
    include_once("../estructura/header_accion.php");
    include_once("../utils/scripts.php");
    include_once("../../control/control_ej4.php");
    $control = new Control_ej4();
    $datos = datosRecibidos();
?>

    <div class="d-flex justify-content-center p-5">
        <button type="button" class="btn btn-success mx-5" data-bs-toggle="modal" data-bs-target="#resultado">Resultados</button>
        <a href="../indice_ej4.php" class="btn btn-warning mx-5" >Volver Atras</a>
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
                    
                        <div>
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
<?php include_once("../estructura/footer.php")?>