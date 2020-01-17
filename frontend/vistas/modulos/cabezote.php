<!-- TOP -->
<div class="container-fluid barraSuperior" id="top">
  <div class="container">
    <div class="row">

    <!-- Redes Sociales, definiendo los tamaños de las pantallas -->
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
        <ul>
          <?php
            $social = ControladorPlantilla::ctrEstiloPlantilla();
            
            $jsonRedesSociales = json_decode($social["redesSociales"],true);
            //var_dump($jsonRedesSociales);
            foreach ($jsonRedesSociales as $key => $value)
            {
              // var_dump ($value["estilo"]);
              echo ' <li>
                        <a href="'.$value["url"].'" target "_blank">
                        <!-- Se cambian los colores de los logos de las redes Sociales facebookColor (original) -->
                        <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
                     </li> ';

            }

          ?>

        </ul>

      </div>

      <!-- REGISTRO --> 
    <!-- Redes Sociales, definiendo los tamaños de las pantallas -->
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
      <ul>
        <li><a href="#modalIngreso" data-toggle="modal">Ingresar></a></li>
        <li>|</li>
        <li><a href="#modalRegistro" data-toggle="modal">Crear Una Cuenta></a></li>

      </ul>

    </div>


    </div>
  
  </div>

</div> 
<!-- HEADER -->
<!-- Las clase que se utilizan en las etiquetas son tomadas de "bootstrap", de apoyo la página w3school.com-->

<header class="container-fluid">
  <div class="container">
    <div class="row" id="cabezote">
      <!-- LOGOTIPO-->

      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
        <a href="#">
           <img src="http://servidor.com/e-commerce/backend/<?php echo $social["logo"]; ?>" class= "img-responsive">
        </a>

      </div>

      <!-- BLOQUE CATEGORIAS Y BUSCADOR -->

      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" >
        <!-- Boton de categorias -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">      
          <p>CATEGORIAS
            <span class="pull-right">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
          </p> 
        </div>

        <!-- Buscador -->
        <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
          <input type="search" name ="buscar" class="form-control" placeholder="Busca ..."> 
          <span class = "input-group-btn">
            <a href="#">
              <button class = "btn btn-default backColor" type="submit">
                <i class="fa fa-search"></i> 
              </button>
            </a>
          </span>
        </div>      
      </div>

      <!-- Carrito de Compras -->
      <div class = "col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
        <a href="#">
          <button class="btn btn-default pull-left backColor">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </button>
        </a>
        <p>TU CESTA <span class="cantidadCesta"></span><br>USB $ <span class="sumaCesta"></span></p>
        
      </div>
       
    </div> <!-- <div class="row" id="cabezote"> -->
    
    <!-- Categorias -->
    <div class="col-xs-12 backColor" id="categorias">
    <!-- Se extraera de forma dinámica las categorias desde la base de datos -->
      <?php 
        // Se obtiene las categorias que se utilizan en el menu principal del sistema de forma dinámica, desde la base de datos.

        $categorias = ControladorProductos::ctrMostrarCategorias();
        // Lo que obtiene esta variable es un arreglo        
        // var_dump($categorias);

        foreach ($categorias as $key => $value)
        {
          //var_dump($value["categoria"]);
          //var_dump($value["id"]);
          //exit;

          // Estas clases son para Responsive de pantallas, varios tamaños.
          echo '<div class = "col-lg-2 col-md-3 col-sm-4 col-xs-12" >      
                <h4>
                  <!-- Agregando las rutas amigables index.php?ruta= por solo "$value["ruta"]" -->
                  <a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
                </h4>
                <hr>
                <ul>'; 
                  // Obtener las subcategorias dependiendo de la categoria, por esta razon se utiliza "id" desde la base de datos.

                  $subcategorias = ControladorProductos::ctrMostrarSubCategorias($value["id"]);
                  //var_dump($subcategorias);
                  foreach ($subcategorias as $key => $value)
                  {
                    // <!-- Agregando las rutas amigables index.php?ruta= por solo "$value["ruta"]" -->
                    echo '<li><a href="'.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';
                  }
          echo '</ul>
             
               </div> ';
        }

      ?> 

    </div><!--  <div class="col-xs-12 backColor" id="categorias">  -->

  </div> <!-- <div class="container"> -->

</header>
