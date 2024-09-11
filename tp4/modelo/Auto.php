<?php

class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensaje;

    public function __construct(){
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
    }
    public function setear($patente,$marca,$modelo,$dniDuenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }
    public function getPatente(){
        return $this->patente;
    }
    public function setPatente($newPatente){
        $this->patente = $newPatente;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($newMarca){
        $this->marca = $newMarca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($newModelo){
        $this->modelo = $newModelo;
    }
    public function getDniDuenio(){
        return $this->dniDuenio;
    }
    public function setDniDuenio($newDniDuenio){
        $this->dniDuenio = $newDniDuenio;
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
        $sql = "SELECT * FROM auto WHERE Patente = ".$this->getPatente();
        if($base->getConnection()){
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                }
            }
        }else{
            $this->setMensaje("Auto->listar: ".$base->getError());
        }
        return $resp;
    }

    public function ingresar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES ('".$this->getPatente()."', '".$this->getMarca().
            "', ".$this->getModelo().", '".$this->getDniDuenio()."');";
        if($base->getConnection()){
            if ($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setMensaje("Auto->ingresar: ".$base->getError());
            }
        }else{
            $this->setMensaje("Auto->ingresar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET Marca='".$this->getMarca()."', Modelo=".$this->getModelo().", DniDuenio=".
            $this->getDniDuenio()." WHERE Patente='".$this->getPatente()."'";
        echo $sql;
        if ($base->getConnection()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensaje("Auto->modificar: ".$base->getError());
            }
        } else {
            $this->setMensaje("Auto->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente='".$this->getPatente()."'";
        if($base->getConnection()){
            if($base->Ejecutar($sql)){
                return true;
            }else{
                $this->setMensaje("Auto->eliminar: ".$base->getError());
            }
        }else{
            $this->setMensaje("Auto->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if($parametro != ""){
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                while($row = $base->Registro()){
                    $obj= new Auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);
                }  
            }
        }else{
            $this->setMensaje("auto->listar: ".$base->getError());
        }
        return $arreglo;
    }


}
?>