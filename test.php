<?php
include_once("configuracion.php");
use Stichoza\GoogleTranslate\GoogleTranslate;

$datos = datosRecibidos();
if(isset($datos['idioma'])){
    $idioma = $datos['idioma'];
}else{
    $idioma = 'es';
}
$traduccion = new GoogleTranslate($idioma); //traducimos al idioma seleccionado, por defecto espaniol
$traduccion->setSource('es'); //traducimos desde el espaniol
echo $traduccion->translate('adios');

/*
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('es');
$translator->addLoader('array', new ArrayLoader());


$translator->addResource('array', [
    'hello' => 'Hola',
    'goodbye' => 'Adiós',
], 'es');


echo $translator->trans('hello');
echo $translator->trans('goodbye');
*/


?>