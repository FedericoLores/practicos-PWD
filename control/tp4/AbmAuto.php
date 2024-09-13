<?php
class AbmAuto{
    /**Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $datos
     * @return Auto
     */
    private function cargarObjeto($datos){
        $obj = null;
        if(array_key_exists('Patente', $datos) && array_key_exists('Marca', $datos) &&
            array_key_exists('Modelo', $datos) && array_key_exists('NroDni', $datos)){
            $persona = new Persona();
            $duenio = $persona->listar("NroDni=".$datos['NroDni']);
            if(count($duenio) == 1){
                $obj = new Auto();
                $obj->setear($datos['Patente'], $datos['Marca'], $datos['Modelo'], $datos['NroDni']);
            }else if(count($duenio) == 0){
                
            }
        }
        return $obj;
    }
    
    /** Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $datos
     * @return Auto
     */
    private function cargarObjetoConClave($datos){
        $obj = null;
        if(isset($datos['Patente']) ){
            $obj = new Auto();
            $obj->setear($datos['Patente'], null, null, null);
        }
        return $obj;
    }
    
    /** Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $datos
     * @return boolean
     */
    private function seteadosCamposClaves($datos){
        $resp = false;
        if (isset($datos['Patente']))
            $resp = true;
        return $resp;
    }
    
    public function alta($datos){
        $resp = false;
        //$datos['Patente'] =null;
        $elObjtTabla = $this->cargarObjeto($datos);
        if($elObjtTabla != null && $elObjtTabla->ingresar()){
            $resp = true;
        }
        return $resp;
    }
    /** permite eliminar un objeto 
     * @param array $datos
     * @return boolean
     */
    public function baja($datos){
        $resp = false;
        if ($this->seteadosCamposClaves($datos)){
            $elObjtTabla = $this->cargarObjetoConClave($datos);
            if ($elObjtTabla != null && $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /** permite modificar un objeto
     * @param array $datos
     * @return boolean
     */
    public function modificacion($datos){
        $resp = false;
        if ($this->seteadosCamposClaves($datos)){
            $elObjtTabla = $this->cargarObjeto($datos);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /** permite buscar un objeto
     * @param array $datos
     * @return array
     */
    public function buscar($datos){
        $where = "";
        if ($datos != NULL){
            if(isset($datos['Patente'])){
                $where .= "Patente='".$datos['Patente']."'";
            }
        }
        $auto = new Auto();
        $arreglo = $auto->listar($where);  
        return $arreglo;
    }

    public function buscarPersona($datos){
        $where = "";
        if ($datos != NULL){
            if(isset($datos['NroDni'])){
                $where .= "DniDuenio ='".$datos['NroDni']."'";
            }
        }
        $auto = new Auto();
        $arreglo = $auto->listar($where);  
        return $arreglo;
    }
    
}
?>