<?php
include_once("configuracion.php");
use Stichoza\GoogleTranslate\GoogleTranslate;

//detecta automaticamente el idioma del texto a traducir, y lo convierte al idioma deseado, por defecto espaniol
$datos = datosRecibidos();
if(isset($datos['idioma'])){
    $idioma = $datos['idioma'];
}else{
    $datos['idioma'] = 'es';//definimos idioma por defecto si no se encuentra uno
    $idioma = 'es';
}
$traduccion = new GoogleTranslate($idioma,'es');
function encontrarIdioma($sigla){
    $idioma = "es";//defecto
    $lista = GoogleTranslate::langs('es');
    if(isset($lista[$sigla])){
        $idioma = $lista[$sigla];
    }
    return $idioma;
}
echo $traduccion->translate('mensaje de prueba en ' . encontrarIdioma($datos['idioma']));
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="$_GET">
        <button type="submit"><?php echo$traduccion->translate('Cambiar Idioma') ?>
        </button>
        <select id="idioma" name="idioma">
            <?php $select = "";
            $idiomasTraducidos = $traduccion->langs($datos['idioma']);
            ksort($idiomasTraducidos);
            $lista = GoogleTranslate::langs('es');
            ksort($lista);
            $idiomasTraducidos = array_values($idiomasTraducidos);
            $i = 0;
            foreach($lista as $clave => $valor){
                $select .= '<option value="' . $clave . '">' .$idiomasTraducidos[$i].' ['.$valor.'] </option>';
                $i++;
            }
            echo $select;
            ?>
        </select>
    </form>
</body>
</html>