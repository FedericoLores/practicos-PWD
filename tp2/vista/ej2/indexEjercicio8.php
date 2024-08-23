<?php
include_once '../estructura/headerEj2.php';
?>
    <form name="from" method="get" class="needs-validation" novalidate action="./action/actionEjercicio8.php">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-2 my-2">
                    <input type="number" min="0" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-md-2 my-2">
                    <select name="estudiante" id="estudiante" class="form-select" required>
                        <option value="es estudiante">Soy estudiante</option>
                        <option value="no es estudiante" selected>No soy estudiante</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <input type="submit" value="Enviar" class="btn btn-primary" name="submit"/>
                </div>
            </div>
        </div>
    </form>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
    </script>
<?php
include_once '../estructura/footer.php';
?>