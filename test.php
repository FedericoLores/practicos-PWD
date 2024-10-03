<?php
include_once("configuracion.php");
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

?>