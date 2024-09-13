<?php
class Persona{
    private $dni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensaje;
    
    public function __construct(){
        $this->dni = 0;
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = 0;
        $this->telefono = 0;
        $this->domicilio = "";
    }
    public function setear($dni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->dni = $dni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }
    public function getDni(){
        return $this->dni;
    }
    public function setDni($newDni){
        $this->dni = $newDni;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($newApellido){
        $this->apellido = $newApellido;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($newNombre){
        $this->nombre = $newNombre;
    }
    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function setFechaNac($newFechaNac){
        $this->fechaNac = $newFechaNac;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($newTelefono){
        $this->telefono = $newTelefono;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($newDomicilio){
        $this->domicilio = $newDomicilio;
    }
    public function getMensaje(){
        return $this->mensaje;
    }
    public function setMensaje($newMensaje){
        $this->mensaje = $newMensaje;
    }

    public function cargar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = ".$this->getDni();
        if($base->getConnection()){
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                }
            }
        }else{
            $this->setMensaje("Persona->listar: ".$base->getError());
        }
        return $resp;
    }

    public function ingresar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES (".$this->getDni().", '".$this->getApellido().
            "', '".$this->getNombre()."', '".$this->getFechaNac()."', '".$this->getTelefono()."', '".$this->getDomicilio()."');";
        if($base->getConnection()){
            if ($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setMensaje("Persona->ingresar: ".$base->getError());
            }
        }else{
            $this->setMensaje("Persona->ingresar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET Apellido='".$this->getApellido()."', Nombre='".$this->getNombre()."', fechaNac='".
            $this->getFechaNac()."', Telefono='".$this->getTelefono()."', Domicilio='".$this->getDomicilio()."' WHERE NroDni=".$this->getDni();
        if ($base->getConnection()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensaje("Persona->modificar: ".$base->getError());
            }
        } else {
            $this->setMensaje("Persona->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni=".$this->getDni();
        if($base->getConnection()){
            if($base->Ejecutar($sql)){
                return true;
            }else{
                $this->setMensaje("Persona->eliminar: ".$base->getError());
            }
        }else{
            $this->setMensaje("Persona->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if($parametro != ""){
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                while($row = $base->Registro()){
                    $obj= new Persona();
                    $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    array_push($arreglo, $obj);
                }  
            }
        }else{
            $this->setMensaje("Persona->listar: ".$base->getError());
        }
        return $arreglo;
    }
}
?>