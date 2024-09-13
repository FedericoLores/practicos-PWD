 //seleccionamos el formulario
function validar(){
    var formulario = document.getElementById("formulario")
    console.log(formulario)
    //definimos un evento para validar
    if(formulario){
        formulario.addEventListener('submit', evento => {
            if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
                evento.preventDefault()
                evento.stopPropagation()
            }
            formulario.classList.add('was-validated')
            
        })
    }
}

function confirmarBorrar(hrefBorrar){
    console.log(hrefBorrar)
    var modal = new bootstrap.Modal("#confirmarEliminar")
    modal.show()
    var botonBorrar = document.getElementById("eliminarPersona")
    botonBorrar.setAttribute("href","accion/abmPersona.php?accion=borrar&NroDni="+hrefBorrar)
    var mostrarDni = document.getElementById("insertDni")
    mostrarDni.innerHTML = hrefBorrar
}
