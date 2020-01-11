<?php
  require_once "conexion.php";
  class ModeloPlantilla
  {
    static public function mdlEstiloPlantilla($tabla)
    {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
      $stmt->execute();

      // fetch = Para una sola línea
      // fetchAll = Para varias líneas
      return $stmt->fetch();
      $stmt->close();
    }
  }