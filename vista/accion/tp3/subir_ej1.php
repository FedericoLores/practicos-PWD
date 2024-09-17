<?php 
  $titulo = "Trabajo práctico 3";
  $ejercicio = "Ejercicio 1";
  $descripcion = "Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
  controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
  máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
  cargado, en caso contrario mostrar un mensaje indicando el problema.";
  include_once ('../../estructura/headerAccion.php');
  include_once("../../../control/tp3/control_ej1.php");
  include_once '../../../configuracion.php';
  $control = new Control_ej1();
  $mensaje = $control->revisarTodo();
  $archivo = $control->getDirectorioFile();
  ?>
  <div class="container d-flex justify-content-center mt-3">
    <h2><a href="<?php echo $archivo;?>"><?php echo "$mensaje";?></a></h2>
    
  </div>
<?php include_once("../../estructura/footer.php");?>