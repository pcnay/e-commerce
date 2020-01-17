<?php
  // Este archivo se asignaran las rutas estaticas de la aplicación, ya que cuando se agregan mas de dos paramentros en la URL se descuadra la pantalla principal, ya que el ".htaccess" toma como ruta el ultimo valor de la barra de direcciones
  class ruta
  {
    public function ctrRuta()
    {
      return 'http://servidor.com/e-commerce/frontend/';
    }
  }
