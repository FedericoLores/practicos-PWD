<?php
class Control_ej3{

    public $directorio = "../../modelo/subidas/";
    public $directorioFile = "";
    public $valido = false; //es una mouse herramienta para despues
    public $tipoFile = "";
    public $enlaceFile = "";
    public $mensaje = "";

    public function __construct(){
        if($_FILES != null){
            if(isset($_FILES["imagen"])){
                if($_FILES["imagen"]["error"] == 0){
                    $this->directorioFile = $this->directorio . basename($_FILES["imagen"]["name"]);
                    $this->tipoFile = strtolower(pathinfo($this->directorioFile,PATHINFO_EXTENSION));
                    $this->enlaceFile = "localhost/dinamica/tp3" . substr($this->directorioFile,2);//cambiar a relativo? sacar dinamica
                    $this->valido = true;
                }
            }
        }
    }

    public function getDirectorio(){
        return $this->directorio;
    }

    public function setDirectorio($directorioNew){
        $this->directorio = $directorioNew;
    }

    public function getDirectorioFile(){
        return $this->directorioFile;
    }

    public function setDirectorioFile($directorioFileNew){
        $this->directorioFile = $directorioFileNew;
    }

    public function getValido(){
        return $this->valido;
    }

    public function setValido($validoNew){
        $this->valido = $validoNew;
    }

    public function getTipoFile(){
        return $this->tipoFile;
    }

    public function setTipoFile($tipoFileNew){
        $this->tipoFile = $tipoFileNew;
    }

    public function getEnlaceFile(){
        return $this->enlaceFile;
    }

    public function setEnlaceFile($enlaceFileNew){
        $this->enlaceFile = $enlaceFileNew;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($mensajeNew){
        $this->mensaje = $mensajeNew;
    }


    // revisar repetidos
    public function repetidos(){
        if (file_exists($this->getDirectorioFile())) {
            $this->setMensaje($this->getMensaje() . "Error: el archivo ya existe.");
            $this->setValido(false);
            }
    } 

    // revisar tamaño
    public function tamaño(){
        if ($_FILES["imagen"]["size"] > 2000000) {
            $this->setMensaje($this->getMensaje() . "Error: el archivo es demasiado grande.");
            $this->setValido(false);
        }
    }
    

    // revisar por formato
    public function formato(){
        if($this->getTipoFile() != "jpeg" && $this->getTipoFile() != "jpg" && $this->getTipoFile() != "png" && $this->getTipoFile() != "gif") {
            $this->setMensaje($this->getMensaje() . "Error: solo se permiten imagenes");
            $this->setValido(false);
        }
    }

    public function revisarTodo(){
        if ($this->getValido() != false){
            $this->repetidos();
            $this->tamaño();
            $this->formato();
            if ($this->getValido() == false) {
                $this->setMensaje($this->getMensaje() . " No se pudo subir el archivo.");
                // si es valido se intenta subir
            } else{
                if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $this->getDirectorioFile())) {
                    $this->setMensaje($this->getMensaje() . "El archivo ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " se subio con exito.");
                } else {
                    $this->setMensaje($this->getMensaje() . "Error: no se pudo subir el archivo.");
                }
            }
        } else {
            $this->setMensaje($this->getMensaje() . "Error: no hay archivo.");
        }
        return $this->getMensaje();
    }

    function devolverDato($datos, $nombreDato){
        $texto = "desconocido";
        if($datos != null && $datos[$nombreDato] != null){
            $texto = $datos[$nombreDato];
        }
        return $texto;
    }

}

?>