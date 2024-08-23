<?php include_once("./estructura/header.php");?>
    <div class="container">
        <form class="needs-validation p-5" novalidate id="formArchivo" name="formArchivo" method="post" action="./accion/subir_ej1.php" enctype="multipart/form-data">
            <div class="text-center">
                <p>ingrese un documento o pdf</p>
            </div>
            <div class="input-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".doc,.pdf" required>
                <div class="invalid-feedback" id="errorSubida">por favor ingrese un archivo .doc o .pdf.</div>    
            </div>
            
            <div class="text-center">
                <input class="btn btn-light border mt-3" type="submit" value="Subir archivo">
            </div>
        </form>
    </div>
                

    <script>
        
        //seleccionamos el formulario
        var formulario = document.getElementById("formArchivo")
        //definimos un evento para validar
        formulario.addEventListener('submit', evento => {
            if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
                event.preventDefault()//esto frena el evento
                event.stopPropagation()//creo que esto frena deteccion del evento
                }
            formulario.classList.add('was-validated')
        })



        document.getElementById("formArchivo").addEventListener("submit", function(event){
            var inputArchivo = document.getElementById("archivo");
            var archivoPath = inputArchivo.value;
            var archivo = inputArchivo.files[0];
            var extensiones = /(\.doc|\.pdf)$/i;
            var maxTamaño = 2 * 1024 * 1024;//2mb
            var errorSubida = document.getElementById("errorSubida");

            if (!archivo) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'Debe seleccionar un archivo.';
                event.preventDefault();
                event.stopPropagation();
            } else if (!extensiones.exec(archivo.name)) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'El archivo debe ser .doc o .pdf.';
                event.preventDefault();
                event.stopPropagation();
            } else if (archivo.size > maxTamaño) {
                inputArchivo.classList.add('is-invalid');
                errorSubida.textContent = 'El archivo no debe superar los 2MB.';
                event.preventDefault();
                event.stopPropagation();
            } else {
                inputArchivo.classList.remove('is-invalid');
                inputArchivo.classList.add('is-valid');
            }
        });


    </script>
<?php include_once("./estructura/footer.php");?>