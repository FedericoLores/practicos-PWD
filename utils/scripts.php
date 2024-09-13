<?php 











/*
spl_autoload_register(function ($class_name){
    $directorys = array(
        $GLOBALS['ROOT'].'modelo/tp4/',
        $GLOBALS['ROOT'].'modelo/tp4/conector/',
        $GLOBALS['ROOT'].'control/tp4/'
        );
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name .'.php')){
            require_once($directory.$class_name .'.php');
            return;
        }
    }
});
*/


function autocargado($clase){
    $directorios = array(
        $_SESSION['ROOT'].'modelo/tp4/',
        $_SESSION['ROOT'].'modelo/conector/',
        $_SESSION['ROOT'].'control/tp4/'
    );
    $total = count($directorios);
    $i = 0;
    while($i<$total && !(file_exists($directorios[$i] . $clase . ".php" ))){
        $i++;
    }
    if($i<$total){
        include_once($directorios[$i] . $clase . ".php");
    }
}

spl_autoload_register('autocargado');


function datosRecibidos() {
	$datos=[];
    if (!empty($_POST)){
        $datos = $_POST;
    }elseif(!empty($_GET)){
        $datos = $_GET;
	}
	return $datos;

}


/*
function __autoload($class_name){
    $directorys = array(
        $_SESSION['ROOT'].'modelo/',
        $_SESSION['ROOT'].'modelo/conector/',
        $_SESSION['ROOT'].'control/tp4/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
}
*/

?>