<?php
include_once '../estructura/headerEj2.php';
?>
    <div class="container">
        <form name="form" id="form" class="needs-validation" novalidate method="post" action="./action/actionEjercicio1.php">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <label for="num" class="form-label">Ingrese un n&uacute;mero:</label>
                    <input type="number" class="form-control" id="num" name="num" required/>
                    <div class="invalid-feedback">Por favor ingrese un n&uacute;mero</div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" name="submit" class="btn btn-primary m-3 col-md-1" value="Enviar">
            </div>
            
        </form>
    </div>
<script>
//seleccionamos el formulario
var formulario = document.getElementById("form")
        //definimos un evento para validar
        formulario.addEventListener('submit', evento => {
            if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
                event.preventDefault()
                event.stopPropagation()
                }
            formulario.classList.add('was-validated')
        }) 
</script>
<?php
include_once '../estructura/footer.php';
?>