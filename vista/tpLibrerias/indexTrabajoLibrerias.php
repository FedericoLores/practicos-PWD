<?php
$titulo = "tp libreias";
$ejercicio = "traduccion";
include_once('../../configuracion.php');
include_once('../estructura/header.php');
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
?>
    <div class="container">
        <div class="card mt-3 p-3 text-center">
            <form class="form" action="<?php $_SERVER['PHP_SELF']?>" method="$_GET">
                <select class="form-select" id="idioma" name="idioma">
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
            <p class="my-3 text-center" ><?php echo $traduccion->translate('el texto actualmente esta en: ' . encontrarIdioma($datos['idioma']).'</br>
            Para este proyecto elegimos una libreria de php para la traduccion de texto. Para implementar la libreria fue requerido el uso de Composer, un gestor de dependencias de php.
            </br> Originalmente ibamos a utilizar la libreria Symfony/translation, pero luego de instalarla y ver como funcionaba la traduccion cambiamos de opinon.
            Symfony solo utiliza traducciones provistas por un pequeño grupo de terceros, los cuales limitan el uso de sus servicios bajo planes pagos. Solo dos proveedores ofrecian una opción gratis, y eran extremadamente restrictivas, limitando la cantidad de palabras que se podian traducir, y la cantidad de idiomas disponibles.
            Despues de encontrarnos con estos problemas, terminamos eligiendo una libreria php que utilizara los servicios de traduccion de Google, los cuales son gratis.
            </br> Una vez instalada la libreria de traduccion de google, encontramos varios problemas mas.
            Aprendimos rapidamente que debiamos hacer la menor cantidad posible de llamadas a api de google combinando lo que se pueda en un array, ya que cada una aumentaba el tiempo de carga.
            Otro problema fue mantener el orden de la lista de idiomas al traducirla, ya que se ordenan en orden alfabetico, al tener nombres de idiomas que comienzan con otra letra en diferentes idiomas, y otros alfabetos, la lista nunca tenia un orden fijo, lo cual hacia imposible tener siempre el nombre en castellano del idioma como referencia.
            Para arreglar esto, ordenamos el arreglo que contiene la lista de idiomas por su claves (las cuales ya se organizan alfabeticamente y son siempre iguales, y se utilizan para que google sepa que idioma es).
            De esta manera siempre sabemos en que posicion se encuentra cada idioma, independiente del orden alfabetico que tenga.
             
             ');?></p>



            <button class="btn btn-primary" type="submit"><?php echo$traduccion->translate('Cambiar Idioma') ?></button>
            </form>
        </div>
    </div>



<?php
include_once('../estructura/footer.php');
?>