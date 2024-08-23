<?php
include_once("./estructura/headerPrincipal.php");
?>
<div class="container text-center">
    <div class="row">
        <div class="col my-2">
        <button class="btn btn-primary px-5" data-bs-target="#tp1" data-bs-toggle="modal">TP1</button>
        </div>
    </div>
    <div class="row">
        <div class="col my-2">
        <button class="btn btn-secondary px-5" data-bs-target="#tp2" data-bs-toggle="modal">TP2</button>
        </div>
    </div>
    <div class="row">
        <div class="col my-2">
        <button class="btn btn-success px-5" data-bs-target="#tp3" data-bs-toggle="modal">TP3</button>
        </div>
    </div>
</div>


<div class="modal fade" id="tp1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">TP 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../../tp1/vista/indexEjercicio1.php">Ejercicio 1</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
            <a class="btn btn-primary" href="../../tp1/vista/indexEjercicio2.php">Ejercicio 2</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
            <a class="btn btn-primary" href="../../tp1/vista/indexEjercicio3-6.php">Ejercicio 3-6</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
            <a class="btn btn-primary" href="../../tp1/vista/indexEjercicio7.php">Ejercicio 7</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
            <a class="btn btn-primary" href="../../tp1/vista/indexEjercicio8.php">Ejercicio 8</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="tp2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">TP 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <button class="btn btn-primary" data-bs-target="#tp2ej2" data-bs-toggle="modal">Ejercicio 2</button>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/indice_ej3.php">Ejercicio 3</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/indice_ej4.php">Ejercicio 4</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tp2ej2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">TP 2: ejercicio 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/ej2/indexEjercicio1.php">Ejercicio 1</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/ej2/indexEjercicio2.php">Ejercicio 2</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/ej2/indexEjercicio3-6.php">Ejercicio 3-6</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/ej2/indexEjercicio7.php">Ejercicio 7</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../vista/ej2/indexEjercicio8.php">Ejercicio 8</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tp3">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">TP 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../../tp3/vista/indice_ej1.php">Ejercicio 1</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../../tp3/vista/indice_ej2.php">Ejercicio 2</a>
            </div>
        </div>
        <div class="row">
            <div class="col my-2 d-flex justify-content-center">
                <a class="btn btn-primary" href="../../tp3/vista/indice_ej3.php">Ejercicio 3</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>







<?php
include_once("./estructura/footer.php");
?>