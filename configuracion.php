<?php
$PROYECTO ='practicos-PWD';

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT']."/".$PROYECTO."/";

include_once ($ROOT.'utils/scripts.php');

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/index.php";

$_SESSION['ROOT'] = $ROOT; 

?>