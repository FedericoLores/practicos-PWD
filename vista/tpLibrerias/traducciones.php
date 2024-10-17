<?php
$titulo = "tp librerias";
$ejercicio = "traduccion";
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
                                $lista = GoogleTranslate::langs('es');
                                ksort($lista);
                                $lista = array_merge(array(null=>'Detectar Idioma'),$lista);
                                if(isset($datos['inputTraduccion']) && $datos['inputTraduccion'] != ''){
                                    $idiomaUsado = $traduccion->getLastDetectedSource();
                                    foreach($lista as $clave => $valor){
                                        if(isset($datos['idioma']) && $clave == $idiomaUsado){
                                            $select .= '<option selected value="' . $clave . '"> '.$valor.' </option>';
                                        }else{
                                            $select .= '<option value="' . $clave . '"> '.$valor.' </option>';
                                        }
                                    }
                                }else{
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
                            foreach($lista as $clave => $valor){
                                if(isset($datos['idiomaOutput']) && $clave == $datos['idiomaOutput']){
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