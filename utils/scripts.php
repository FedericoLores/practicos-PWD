<?php
use Stichoza\GoogleTranslate\GoogleTranslate;

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

//revisa idioma recibido, devuelve idioma
function idiomaRecibido($datos, $output = false){
    $idioma = 'es'; //definimos idioma por defecto si no se encuentra uno
    $lista = GoogleTranslate::langs('es');
    if($output){
        $tipo = "idiomaOutput";
    }else{
        $tipo = "idioma";
    }
    if(isset($datos[$tipo])){//nos aseguramos de que exista el dato
        if(isset($lista[$datos[$tipo]])){//nos aseguramos de que exista el idioma
            $idioma = $datos[$tipo];
        }
    }else{//si no existe el dato, definimos un dato por defecto
        $datos[$tipo] = 'es';
    }
    return $idioma;
}

//devuelve nombre completo de un idioma
function encontrarIdioma($datos){
    $idioma = "no encontrado"; //idioma por defecto
    $lista = GoogleTranslate::langs('es');
    if(isset($datos['idioma'])){
        $sigla = $datos['idioma'];
        if(isset($lista[$sigla])){
            $idioma = $lista[$sigla];//solo se muestra si es un idioma valido
        }
    }else{
        $idioma = "español";//por defecto si no hay datos
    }
    return $idioma;
}

?>