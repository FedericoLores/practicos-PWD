<?php
include_once("configuracion.php");
use Stichoza\GoogleTranslate\GoogleTranslate;

//detecta automaticamente el idioma del texto a traducir, y lo convierte al idioma deseado, por defecto espaniol
$datos = datosRecibidos();
if(isset($datos['idioma'])){
    $idioma = $datos['idioma'];
}else{
    $idioma = 'es';
}
$traduccion = new GoogleTranslate($idioma); 
echo $traduccion->translate('До свидания');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./test.php" method="$_GET"><!-- buscar funcion para sacar nombre de archivo actual -->
        <button type="submit"><?php echo$traduccion->translate('Cambiar Idioma') ?>
        </button>
        <select id="idioma" name="idioma">
            <option value="en"><?php echo$traduccion->translate('ingles')?></option>
            <option value="es"><?php echo$traduccion->translate('español')?></option>
            <option value="it"><?php echo$traduccion->translate('italiano')?></option>
            <option value="fr"><?php echo$traduccion->translate('frances')?></option>
            <option value="pt"><?php echo$traduccion->translate('portugues')?></option>
        </select>
    </form>
</body>
</html>