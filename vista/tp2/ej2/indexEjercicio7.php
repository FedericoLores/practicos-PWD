<?php
include_once '../estructura/headerEj2.php';
?>
    <form name="form" id="form" method="get" class="needs-validation" novalidate action="./action/actionEjercicio7.php">
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4 mt-3">
                    <input type="number" id="num1" name="num1" class="form-control" required placeholder="Ingrese un n&uacute;mero"/></br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4">
                    <input type="number" id="num2" name="num2" class="form-control" required placeholder="Ingrese otro n&uacute;mero"/></br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-md-3 d-flex justify-content-center">
                    <select name="operacion" id="operacion" class="form-select d-flex justify-content-center" required>
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                    </select>
                    <input type="submit" value="Enviar" class="btn btn-primary d-flex justify-content-center" name="submit"/>
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