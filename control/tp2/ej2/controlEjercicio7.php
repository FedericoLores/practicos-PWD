<?php
class ControlEj7TP2{
    public function operarNumeros($datos){
        $resultado = null;
        if(!empty($datos)){
            $num1 = $datos['num1'];
            $num2 = $datos['num2'];
            $resultado = 0;
            if($datos['operacion'] == "suma"){
                $resultado = $num1 + $num2;
            }elseif($datos['operacion'] == "resta"){
                $resultado = $num1 - $num2;
            }elseif($datos['operacion'] == "multiplicacion"){
                $resultado = $num1 * $num2;
            }
        }
        return $resultado;
    }
}
?>