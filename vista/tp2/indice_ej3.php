<?php include_once("../estructura/tp2/header.php")?>
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

        <form id="formularioLogin" class="needs-validation" novalidate method="post" action="../accion/tp2/accion_ej3.php">
            <div class="mb-3">
                <div class="input-group px-4 ">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" minlength="3" maxlength="50" required>
                    <div class="invalid-feedback">Por favor ingrese un usuario</div>
                </div>
                
            </div>

            <div class="mb-3">
                <div class="input-group px-4">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="contrase&ntilde;a" minlength="8" pattern="^(?=.*[a-zA-Z])(?=.*\d).+$" required>
                    <div class="invalid-feedback">Ingrese una contrase&ntilde;a de 8 caracteres o mas, con letras y numeros, que sea diferente al usuario</div>
                </div>
            </div>

            <div class="d-grid px-4 pb-5 mb-5">
                <button type="submit" onclick="validarLogin('formularioLogin')" class="btn btn-success">Entrar</button>
            </div>
        </form>
    </div>
  </div>
</div>


<script>
    var loginModal = new bootstrap.Modal("#login")
    //mostramos el modal apenas carga la pagina
    window.addEventListener("DOMContentLoaded", () => {
        loginModal.show()
    })



</script>    
<?php include_once("../estructura/footer.php")?>