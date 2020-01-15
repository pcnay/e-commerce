<?php
/*
  INDEX.PHP
  Contiene todos los modelos y controladores que se van requiriendo en el Sistema

    ControladorPlantilla() -> plantilla()
    [plantilla.controlador.php]

      pantilla()
      [plantilla.php]
      Carga el HTML principal, que contiene la maquetacion del sistema, como son los archivos "CSS", "JavaScript", "tQuery" en esta parte se van agregando en seccion que estos son archivos incrustados para un mejor mantenimiento. Por ejemplo:
        modulos/cabezote.php 
        Contiene las opciones del Menú General, abarcando las siguientes opciones:
        
        Categorias
          controladorProductos:: ctrMostrarCategorias() 
          [productos.controlador.php]
            En esta parte es donde se hace el enlace con el Modelo desde el Controlador.
            ModeloProductos::mdlMostrarCategorias
            [productos.modelo.php]
          controladorProductos:: ctrMostrarSubCategorias() 
          [productos.controlador.php]
            En esta parte es donde se hace el enlace con el Modelo desde el Controlador.
            ModeloProductos::mdlMostrarSubCategorias
            [productos.modelo.php]
*/           
*/
?>