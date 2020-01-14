<?php
  require_once "../controladores/plantilla.controlador.php";
  require_once "../modelos/plantilla.modelo.php";
  class AjaxPlantilla
  {
    public function ajaxEstiloPlantilla()
    {
      $respuesta = ControladorPlantilla::ctrEstiloPlantilla();
       echo json_encode($respuesta); 
       // Echo para que Ajax lo reciba, este valor retornado es de tipo "Arreglo", por lo que
       // Se tiene que convertir a String. 

    }
  }

  $objeto = new AjaxPlantilla();
  $objeto->ajaxEstiloPlantilla();

