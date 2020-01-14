<!DOCTYPE html>

<!-- https://wwww.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp 
Se puede revisar como funciona, y cual es el código.
https://fontawesome.io/icons
Maneja los iconos, que se utilizaran en elsistema

-->

<html lang="es">
  <head>
    <meta chartset="UTF-8">
    <!-- Pantallas responsivas  --> 
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Tienda Virtual">
    <meta name= "description" content="Comercio Electronico">
    <meta name="keyword" content= "comercio electronico ">
    <title>Tienda Virtual </title>
    <!-- De Forma dinamica -->
    <?php
      $icono = ControladorPlantilla::ctrEstiloPlantilla();
      echo '<link rel= "icon" href = "http://servidor.com/e-commerce/backend/'.$icono["icono"].' ">';

    ?>

    <!-- Es de forma estatica--> 
    <!-- <link rel="icon" href ="http://servidor.com/e-commerce/backend/vistas/img/plantilla/icono.png"> -->

    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <!-- Estos dos enlaces se bajaron de Google Font. -->
    <link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!-- Enlazando el archivo ".css" que se elaboro con el proyecto-->
    <link rel="stylesheet" href="vistas/css/plantilla.css">
    <link rel="stylesheet" href="vistas/css/cabezote.css">

    <script src="vistas/js/plugins/jquery.min.js"></script>
    <script src="vistas/js/plugins/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      // <!-- CABEZOTE-->  
      include "modulos/cabezote.php"
    ?> 
  <script src= "vistas/js/cabezote.js"></script>  
  <script src= "vistas/js/plantilla.js"></script>  
</body>

</html>