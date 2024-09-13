<?php 
  include_once("../../estructura/tp3/header_accion.php");
  include_once("../../../control/tp3/control_ej2.php");
  $control = new Control_ej2();
  $archivo = $control->getEnlaceFile();
  $mensaje = $control->revisarTodo();
?>
  <div class="container">
    <div class="container mt-3">
    <h2><?php echo "$mensaje";?></h2>
      <textarea class="form-control form-control-lg px-5 pb-5 pt-3" placeholder="texto no encontrado" name="texto" id="texto" disabled><?php  if(file_exists($control->getDirectorioFile())){echo file_get_contents($control->getDirectorioFile());};?></textarea>
    </div>  
  </div>
  <?php include_once("../../estructura/footer.php");?>