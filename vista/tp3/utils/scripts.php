<?php
function datosRecibidos() {
	$datos=[];
    if (!empty($_POST)){
        $datos = $_POST;
    }elseif(!empty($_GET)){
        $datos = $_GET;
	}
	return $datos;

}


?>

