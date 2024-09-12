<?php
class Control_ej1{

    public $directorio = "../../modelo/subidas/";
    public $directorioFile = "";
    public $valido = false; //es una mouse herramienta para despues
    public $tipoFile = "";
    public $enlaceFile = "";
    public $mensaje = "";

    public function __construct(){
        if($_FILES != null){
            if($_FILES["archivo"] != null){
                $this->directorioFile = $this->directorio . basename($_FILES["archivo"]["name"]);
                $this->tipoFile = strtolower(pathinfo($this->directorioFile,PATHINFO_EXTENSION));
                $this->enlaceFile = "localhost/dinamica/tp3" . substr($this->directorioFile,2);//cambiar a relativo? sacar dinamica
                $this->valido = true;
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
        if ($_FILES["archivo"]["size"] > 2000000) {
            $this->setMensaje($this->getMensaje() . "Error: el archivo es demasiado grande.");
            $this->setValido(false);
        }
    }
    

    // revisar por formato
    public function formato(){
        if($this->getTipoFile() != "doc" && $this->getTipoFile() != "pdf") {
            $this->setMensaje($this->getMensaje() . "Error: solo se permiten .doc y .pdf.");
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
                if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $this->getDirectorioFile())) {
                    $this->setMensaje($this->getMensaje() . "El archivo ". htmlspecialchars( basename( $_FILES["archivo"]["name"])). " se subio con exito.");
                } else {
                    $this->setMensaje($this->getMensaje() . "Error: no se pudo subir el archivo.");
                }
            }
        } else {
            $this->setMensaje($this->getMensaje() . "Error: no hay archivo.");
        }
        return $this->getMensaje();
    }


    public function revisarTodo2(){
        
        if ($_FILES != null && isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == 0) {
            $this->repetidos();
            $this->tamaño();
            $this->formato();
    
            if ($this->getValido()) {
                if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $this->getDirectorioFile())) {
                    $this->setMensaje($this->getMensaje() . "El archivo " . htmlspecialchars(basename($_FILES["archivo"]["name"])) . " se subió con éxito.");
                } else {
                    $this->setMensaje($this->getMensaje() . "Error: no se pudo subir el archivo.");
                }
            } else {
                $this->setMensaje($this->getMensaje() . " No se pudo subir el archivo.");
            }
        } else {
            $this->setMensaje($this->getMensaje() . "Error: no hay archivo o hubo un error al subirlo.");
        }
        return $this->getMensaje();
    }
    
}
?>