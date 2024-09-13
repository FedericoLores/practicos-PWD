<?php 
  include_once("../../estructura/tp3/header_accion.php");
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