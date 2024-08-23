<?php
include_once '../estructura/headerEj2.php';
?>
<div class="container mt-3">
    <form name="form" method="get" class="needs-validation" novalidate action="./action/actionEjercicio3-6.php">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                    <div class="invalid-feedback">Ingrese su nombre</div>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required />
                    <div class="invalid-feedback">Ingrese su apellido</div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Edad</label>
                    <input type="number" min="0" class="form-control" id="age" name="age" required />
                    <div class="invalid-feedback">Ingrese su edad</div>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required />
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
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
        var desmarcados = false
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            deportes = document.getElementsByName("deportes[]")
            for (i = 0; i<deportes.length; i++) {
                if(deportes[i].checked){
                    for(j=0; j<deportes.length; j++){
                        deportes[j].removeAttribute("required")
                        i = deportes.length
                        desmarcados = true
                    }
                }else if(desmarcados){
                    for(k=0; k<deportes.length; k++){
                        deportes[k].setAttribute("required", "")
                        desmarcados = false
                    }
                }
            }
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
