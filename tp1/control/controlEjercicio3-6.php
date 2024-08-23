<?php
class ControlEj3{
    public function verificarEdad($datos){
        $texto = "No se ingresaron datos";
        if(!empty($datos)){
            $nombre = $datos['name'];
            $apellido = $datos['apellido'];
            $edad = $datos['age'];
            $direccion = $datos['direccion'];
            $estudios = $datos['estudios'];
            $sexo = $datos['sexo'];
            $practica = false;
            if(array_key_exists('deportes',$datos)){
                $deportes = $datos['deportes'];
                $practica = true;
            }
            if($edad >17){
                $texto = "Hola yo soy ".$nombre." ".$apellido." soy mayor de edad, mi direcci&oacute;n es ".
                $direccion.", mi nivel de estudios es ".$estudios.", mi sexo es ".$sexo;
                if($practica){
                    $texto .= " y practico ".count($deportes)." deporte(s)";
                }else{
                    $texto .= " y no practico deportes";
                }
                
            }else{
                $texto = "Hola yo soy ".$nombre." ".$apellido." NO soy mayor de edad, mi direcci&oacute;n es ".
                $direccion.", mi nivel de estudios es ".$estudios.", mi sexo es ".$sexo;
                if($practica){
                    $texto .= " y practico ".count($deportes)." deporte(s)";
                }else{
                    $texto .= " y no practico deportes";
                }
            }
        }
        return $texto;
    }
}