<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;
        if(array_key_exists('Patente', $param) && array_key_exists('Marca', $param) &&
            array_key_exists('Modelo', $param) && array_key_exists('NroDni', $param)){
            $persona = new Persona();
            $duenio = $persona->listar("NroDni=".$param['NroDni']);
            if(count($duenio) == 1){
                $obj = new Auto();
                $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['NroDni']);
            }else if(count($duenio) == 0){
                
            }
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        if(isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['Patente'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
        if($elObjtTabla != null && $elObjtTabla->ingresar()){
            $resp = true;
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla != null && $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        //$where = " true "; no se que es esto????
        $where = "";
        if ($param != NULL){
            if(isset($param['Patente'])){
                $where .= "Patente='".$param['Patente']."'";
            }
        }
        $auto = new Auto();
        $arreglo = $auto->listar($where);  
        return $arreglo;
    }
    
}
?>