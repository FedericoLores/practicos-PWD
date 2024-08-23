<?php include_once("./estructura/header.php")?>
<!-- boton modal -->
<div class="d-flex justify-content-center p-5">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">Login</button>
</div>

<!-- modal login -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content p-3">
    <div class="d-flex flex-row-reverse">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

        <h1 class="d-flex justify-content-center p-5">Member Login</h1>

        <form id="formularioLogin" class="needs-validation" novalidate method="post" action="./accion/accion_ej3.php">
            <div class="mb-3">
                <div class="input-group px-4 ">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                    <div class="valid-feedback">Se ve bien!</div>
                    <div class="invalid-feedback">Por favor ingrese un usuario</div>
                </div>
                
            </div>

            <div class="mb-3">
                <div class="input-group px-4">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="contraseña" required>
                    <div class="valid-feedback">Se ve bien!</div>
                    <div class="invalid-feedback">Por favor ingrese una contrase&ntilde;a</div>
                </div>
            </div>

            <div class="d-grid px-4 pb-5 mb-5">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>
        </form>
    </div>
  </div>
</div>


<script>
    //seleccionamos el formulario
    var formulario = document.getElementById("formularioLogin")
    //definimos un evento para validar
    formulario.addEventListener('submit', evento => {
        if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
            event.preventDefault()
            event.stopPropagation()
            }
        formulario.classList.add('was-validated')
    })

    var loginModal = new bootstrap.Modal("#login")

    //mostramos el modal apenas carga la pagina
    window.addEventListener("DOMContentLoaded", () => {
        loginModal.show()
    })



</script>    
<?php include_once("./estructura/footer.php")?>