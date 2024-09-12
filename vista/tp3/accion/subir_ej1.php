<?php include_once("../estructura/header_accion.php");
  include_once("../../control/control_ej1.php");
  include_once("../utils/scripts.php");
  $control = new Control_ej1();
  $mensaje = $control->revisarTodo();
  $archivo = $control->getDirectorioFile();
  ?>
  <div class="container d-flex justify-content-center mt-3">
    <h2><a href="<?php echo $archivo;?>"><?php echo "$mensaje";?></a></h2>
    
  </div>
<?php include_once("../estructura/footer.php");?>