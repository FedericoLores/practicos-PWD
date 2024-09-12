<?php
class ControlEj1{
    function tipoNumero($datos){
        $tipo = "No se ingreso un numero";
        if(!empty($datos)){
            $num = $datos['num'];
            if($num>0){
                $tipo = "El numero ingresado es positivo.";
            }elseif($num<0){
                $tipo = "El numero ingresado es negativo.";
            }elseif($num == 0){
                $tipo = "El numero ingresado es 0.";
            }
        }
        
        return $tipo;
    }
}
?>