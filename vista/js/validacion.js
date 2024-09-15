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

function confirmarBorrar(clave,idModal,idBoton,idSpan,hrefPath){
    var modal = new bootstrap.Modal(idModal)
    modal.show()
    var botonBorrar = document.getElementById(idBoton)
    botonBorrar.setAttribute("href",hrefPath+"'"+clave+"'")
    var mostrarDni = document.getElementById(idSpan)
    mostrarDni.innerHTML = clave
}
