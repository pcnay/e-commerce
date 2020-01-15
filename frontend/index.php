<?php
  // Se mostrara el menu principal del sistema.
  require_once "controladores/plantilla.controlador.php";
  require_once "controladores/productos.controlador.php";

  require_once "modelos/plantilla.modelo.php";
  require_once "modelos/productos.modelo.php";
  
  // Vincular la vista del Frontend con el "index.php" principal.
  /* Cambios permitidos :
    barraSuperior
    textoSuperior
    colorFondo
    colorTexto
    (.backColor)
    Icono de Facebook - redesSociales
      Escoger red, estilo, url
      facebook, facebookColor, http://....
      

  */

  $plantilla = new ControladorPlantilla();
  $plantilla->plantilla();

?>
