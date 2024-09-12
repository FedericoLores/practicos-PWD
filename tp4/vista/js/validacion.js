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
