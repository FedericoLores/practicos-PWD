<?php
class BaseDatos extends PDO{
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
  	private $debug;
  	private $connection;
  	private $indice;
  	private $resultado;
    private $sql;
    private $error;

    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'infoautos';
        $this->user = 'root';
        /**$this->pass = ''; 
        $this->debug = true;*/
        $this->error ="";
        $this->sql ="";
        $this->indice =0;

        $dsn = $this->engine.':dbname='.$this->database.';host='.$this->host;
        try{
            parent::__construct($dsn,$this->user,null,array(parent::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $this->connection = true;
        }catch(PDOException $exception){
            echo $exception;
            $this->error = $exception->getMessage();
            $this->connection = false;
        }
    }
    public function getConnection(){
        return $this->connection;
    }
    public function getError(){
        return $this->error;
    }
    public function setError($newError){
        $this->error = $newError;
    }
    public function getSql(){
        return $this->sql;
    }
    public function setSql($newSql){
        $this->sql = $newSql;
    }
    public function getDebug(){
        return $this->debug;
    }
    public function setDebug($newDebug){
        $this->debug = $newDebug;
    }
    public function getResultado(){
        return $this->resultado;
    }
    public function setResultado($newResultado){
        $this->resultado = $newResultado;
    }
    public function getIndice(){
        return $this->indice;
    }
    public function setIndice($newIndice){
        $this->indice = $newIndice;
    }

    public function Registro(){
        $filaActual = false;
        $indiceActual = $this->getIndice();
        if($indiceActual>=0){
            $filas = $this->getResultado();
            if($indiceActual<count($filas)){
                $filaActual =  $filas[$indiceActual];
                $indiceActual++;
                $this->setIndice($indiceActual);
            }else{
                $this->setIndice(-1);
            }
        } 
        return $filaActual;
    }

    private function analizarDebug(){
        $e = $this->errorInfo();
        $this->setError($e);
        //es necesario? debug nunca se modifica???
        if($this->getDebug()){
            echo "<pre>";
            print_r($e);
            echo "</pre>";
        }
    }
    private function EjecutarInsert($sql){
        $resultado=parent::query($sql);
        if(!$resultado){
             $this->analizarDebug();
             $id=0;
        }else{
             $id = $this->lastInsertId(); 
             if ($id==0){
                 $id=-1;
             }
        }
        return $id;
    }
    private function EjecutarDeleteUpdate($sql){
        $cantFilas =-1;
        $resultado = parent::query($sql);
        if(!$resultado){
            $this->analizarDebug();
        }else{
            $cantFilas = $resultado->rowCount();   
        }
        return $cantFilas;
    }
    private function EjecutarSelect($sql){
        $cant = -1;
        $resultado = parent::query($sql);
        if(!$resultado){
             $this->analizarDebug();
        }else {
             $arregloResult = $resultado->fetchAll();
             $cant = count($arregloResult);
             $this->setIndice(0);
             $this->setResultado($arregloResult);
        }
        return $cant;  
    }
    public function Ejecutar($sql){
        $this->setError("");
        $this->setSQL($sql);
        if(stristr($sql,"insert")){ // se desea NSERT ? 
            $resp =  $this->EjecutarInsert($sql);
        }
        // se desea UPDATE o DELETE ? 
        if(stristr($sql,"update") OR stristr($sql,"delete")){
            $resp =  $this->EjecutarDeleteUpdate($sql);
        }
        // se desea ejecutar un select
        if(stristr($sql,"select")){
            $resp =  $this->EjecutarSelect($sql);
        }
        return $resp;
    }
    
}

?>