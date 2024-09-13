<?php
class AbmPersona{
    /** Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $datos
     * @return Persona
     */
    private function cargarObjeto($datos){
        $persona = null;
        if(array_key_exists('NroDni', $datos) && array_key_exists('Apellido', $datos) &&
            array_key_exists('Nombre', $datos) && array_key_exists('fechaNac', $datos)&&
            array_key_exists('Telefono', $datos) && array_key_exists('Domicilio', $datos)){
            $persona = new Persona();
            $persona->setear($datos['NroDni'], $datos['Apellido'], $datos['Nombre'], $datos['fechaNac'], $datos['Telefono'], $datos['Domicilio']);
        }
        return $persona;
    }
    
    /** Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $datos
     * @return Persona
     */
    private function cargarObjetoConClave($datos){
        $persona = null;
        if(isset($datos['NroDni']) ){
            $persona = new Persona();
            $persona->setear($datos['NroDni'], null, null, null, null, null);
        }
        return $persona;
    }
    
    
    /** Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $datos
     * @return boolean
     */
    private function seteadosCamposClaves($datos){
        $resp = false;
        if (isset($datos['NroDni']))
            $resp = true;
        return $resp;
    }
    
    public function alta($datos){
        $resp = false;
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
            $autos = new Auto();
            $listaAutos = $autos->listar("DniDuenio=".$datos['NroDni']);
            $elObjtTabla = $this->cargarObjetoConClave($datos);
            if(count($listaAutos)<=0){
                if ($elObjtTabla != null && $elObjtTabla->eliminar()){
                    $resp = true;
                }
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
            if(isset($datos['NroDni'])){
                $where .= "NroDni=".$datos['NroDni'];
            }else if(isset($datos['DniDuenio'])){
                $where .= "NroDni=".$datos['DniDuenio'];
            }
        }
        $persona = new Persona();
        $arreglo = $persona->listar($where);  
        return $arreglo;
    }
    
}
?>