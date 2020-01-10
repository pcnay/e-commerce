<?php
  // Se mostrara el menu principal del sistema.
  require_once "controladores/plantilla.controlador.php";
  
  // Vincular la vista del Frontend con el "index.php" principal.
  $plantilla = new ControladorPlantilla();
  $plantilla->plantilla();

?>
