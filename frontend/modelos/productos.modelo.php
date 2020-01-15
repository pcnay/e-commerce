<?php
  require_once "conexion.php";

  class ModeloProductos
  {
    // Es estatico porque tiene parámetros.
    // Obtiene las Categorias.
    static public function mdlMostrarCategorias($tabla)
    {
      $stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla");
      $stmt->execute();
      return $stmt-> fetchAll(); // Retorna varios campos.
      $stmt->close(); // Cierra la conexion mysql.
      $stmt = null; // Anula el objeto PDO

    }

    // Es estatico porque tiene parámetros.
    // Obtiene las SubCategorias
    static public function mdlMostrarSubCategorias($tabla,$id)
    {
      //var_dump ($id);
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id_categoria");
      // Para enlazar parámetros.
      $stmt->bindParam(":id_categoria",$id,PDO::PARAM_INT);
      $stmt->execute();
      //var_dump($stmt);
      //exit;
      return $stmt-> fetchAll(); // Retorna varios campos.
      $stmt->close(); // Cierra la conexion mysql.
      $stmt = null; // Anula el objeto PDO
    }

  }