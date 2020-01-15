<?php
  class ControladorProductos
  {
    // Mostrar Categorias.
    public function ctrMostrarCategorias()
    {
      $tabla = "categorias";
      // Realiza el enlace con el Modelo
      $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);
      return $respuesta;

    }

    // Mostrar SubCategorias.
    public function ctrMostrarSubCategorias($id)
    {
      $tabla = "subcategorias";
      $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$id);
      return $respuesta;

    }
  }
