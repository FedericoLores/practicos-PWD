<?php
include_once '../../estructura/tp2/headerEj2.php';
?>
    <form name="horarios" id="horarios" method="get" action="../../accion/tp2/ej2/actionEjercicio2.php" class="needs-validation" novalidate>
        <h3 style="text-align: center;">Carga horaria por dia de la semana</h3>
        <div class="container text-center">
            <div class="row row-cols-5">
                <div class="col">
                    <label for="lunes" class="form-label"><b>Lunes</b></label>
                    <input type="number" value="0" min="0" max="24" class="form-control" id="lunes" name="lunes" required/>
                    <div class="invalid-feedback">Ingrese un n&uacute;mero valido</div>
                </div>
                <div class="col">
                    <label for="martes" class="form-label"><b>Martes</b></label>
                    <input type="number" value="0" min="0" max="24" class="form-control" id="martes" name="martes" required/>
                    <div class="invalid-feedback">Ingrese un n&uacute;mero valido</div>
                </div>
                <div class="col">
                    <label for="miercoles" class="form-label"><b>Miercoles</b></label>
                    <input type="number" value="0" min="0" max="24" class="form-control" id="miercoles" name="miercoles" required/>
                    <div class="invalid-feedback">Ingrese un n&uacute;mero valido</div>
                </div>
                <div class="col">
                    <label for="jueves" class="form-label"><b>Jueves</b></label>
                    <input type="number" value="0" min="0" max="24" class="form-control" id="jueves" name="jueves" required/>
                    <div class="invalid-feedback">Ingrese un n&uacute;mero valido</div>
                </div>
                <div class="col">
                    <label for="viernes" class="form-label"><b>Viernes</b></label>
                    <input type="number" value="0" min="0" max="24" class="form-control" id="viernes" name="viernes" required/>
                    <div class="invalid-feedback">Ingrese un n&uacute;mero valido</div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" onclick="validar('horarios')" class="btn btn-primary" value="Enviar">
        </div>
    </form>
    <script>

        var cineModal = new bootstrap.Modal("#cine")
        //mostramos el modal apenas carga la pagina
        window.addEventListener("DOMContentLoaded", () => {
            cineModal.show()
        })

    </script>
<?php
include_once '../../estructura/footer.php';
?>

