<?php
class ControlEj2{
    function calcularCargaHoraria($datos){
        array_pop($datos);
        $horasTotales = 0;
        foreach($datos as $dia){
            if($dia != "0"){
                $horasTotales += $dia;
            }
        }
        return $horasTotales;
    }
}
?>