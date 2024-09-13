 //seleccionamos el formulario
function validar(idForm){
    var formulario = document.getElementById(idForm)
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
    var modal = new bootstrap.Modal("#confirmarEliminarPersona")
    modal.show()
    var botonBorrar = document.getElementById("eliminarPersona")
    botonBorrar.setAttribute("href","../accion/tp4/accionPersona.php?accion=borrar&NroDni="+hrefBorrar)
    var mostrarDni = document.getElementById("insertDni")
    mostrarDni.innerHTML = hrefBorrar
}
