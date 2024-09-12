<?php

class Control_ej4{

    function devolverDato($datos, $nombreDato){
        $texto = "desconocido";
        if($datos != null && $datos[$nombreDato] != null){
            $texto = $datos[$nombreDato];
        }
        return $texto;
    }

}

?>