<?php
$titulo = "TP Librerias";
$ejercicio = "Traductor de Contenidos";
include_once('../../configuracion.php');
include_once('../estructura/header.php');
use Stichoza\GoogleTranslate\GoogleTranslate;

$datos = datosRecibidos();
$idioma = idiomaRecibido($datos);
$idiomaOut = idiomaRecibido($datos, true);
$traduccion = new GoogleTranslate($idiomaOut, $idioma);
if(isset($datos['idioma']) &&$datos['idioma'] == ''){
    $traduccion->setSource();
}
if(isset($datos['inputTraduccion'])){
    $textoTraducido = $traduccion->translate($datos['inputTraduccion']);
}else{
    $textoTraducido = "";
} 

?>
<div class="card m-4 mt-5">
    <div class="container text-center">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="formulario" name="formulario">
            <div class="container m-2">
                <div class="row g-3 d-flex justify-content-center p-2">
                    <div class="col-md-6">
                        <select class="form-select m-2" id="idioma" name="idioma">
                            <?php 
                                $select = "";
                                //creamos un array con la lista de idiomas disponibles
                                $lista = GoogleTranslate::langs('es');
                                //lo ordenamos por el orden alfabetico de las claves
                                ksort($lista);
                                //agregamos una clave null al inicio del array para poder usar la opcion de detectar idioma
                                $lista = array_merge(array(null=>'Detectar Idioma'),$lista);
                                if(isset($datos['inputTraduccion']) && $datos['inputTraduccion'] != ''){
                                    //verifica que fue enviado un texto a traducir
                                    $idiomaUsado = $traduccion->getLastDetectedSource();
                                    //obtiene el idioma usado desde el que se traduce
                                    foreach($lista as $clave => $valor){
                                        if(isset($datos['idioma']) && $clave == $idiomaUsado){
                                            //hacemos que el idioma usado sea el que se muestra seleccionado
                                            $select .= '<option selected value="' . $clave . '"> '.$valor.' </option>';
                                        }else{
                                            //caso contrario sigue agregando normalmente los elementos de option
                                            $select .= '<option value="' . $clave . '"> '.$valor.' </option>';
                                        }
                                    }
                                }else{
                                    //si no se envia texto a traducir se forma el select normalmente
                                    foreach($lista as $clave => $valor){
                                        if(isset($datos['idioma']) && $clave == $datos['idioma']){
                                            $select .= '<option selected value="' . $clave . '"> '.$valor.' </option>';
                                        }else{
                                            $select .= '<option value="' . $clave . '"> '.$valor.' </option>';
                                        }
                                    }
                                }
                                echo $select;
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select m-2" id="idiomaOutput" name="idiomaOutput">
                            <?php $select = "";
                            unset($lista[null]);
                            //quitamos del array la opcion de detectar idioma 
                            foreach($lista as $clave => $valor){
                                //formamos la lista del select normalmente 
                                if(isset($datos['idiomaOutput']) && $clave == $datos['idiomaOutput']){
                                    //mostramos como opcion seleccionada el idioma que fue elegido anteriormente
                                    $select .= '<option selected value="' . $clave . '"> '.$valor.' </option>';
                                }else{
                                    $select .= '<option value="' . $clave . '"> '.$valor.' </option>';
                                }
                            }
                            echo $select;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <label for="inputTraduccion"></label>
                            <textarea id="inputTraduccion" name="inputTraduccion" class="form-control m-2 p-1" placeholder="<?php echo $traduccion->translate('Escriba aqui lo que quiera traducir.');?>"><?php if(isset($datos['inputTraduccion'])) echo $datos['inputTraduccion']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <textarea disabled class="form-control m-2" ><?php echo $textoTraducido; ?></textarea>
                    </div>
                </div>
                <div class="container d-flex justify-content-center mt-2 pb-2">
                    <input type="submit" class="btn btn-primary" value="traducir"></input>
                </div>

            </div>
        </form>
    </div>
</div>
<?php
include_once('../estructura/footer.php');
?>