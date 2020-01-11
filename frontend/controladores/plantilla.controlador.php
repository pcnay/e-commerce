<?php
  class ControladorPlantilla
  {
    // Llamando a la plantilla
    public function plantilla()
    {
      include "vistas/plantilla.php";
    }

    // Traerlos estilos dinamicos de la plantilla
    public function ctrEstiloPlantilla()
    {
      $tabla = "plantilla";
      $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
      return $respuesta;
      
    }
  }
