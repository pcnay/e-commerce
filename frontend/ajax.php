<?php
  require_once "../controladores/plantilla.controlador.php";
  require_once "../modelos/plantilla.modelo.php";
  class AjaxPlantilla
  {
    public function ajaxEstiloPlantilla()
    {
      $respuesta =ControladorPlantilla::crtEstiloPlantilla();
      echo $respuesta;

    }
  }

  $objeto = AjaxPlantilla();
  $objeto->ajaxEstiloPlantilla();

