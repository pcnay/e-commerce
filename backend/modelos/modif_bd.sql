USE ecommerce;

ALTER TABLE `subcategorias`
  ADD KEY `id_categoria` (`id_categoria`);
  

/* Agregando la relaciones de Tablas de Categorias con Subcategorias */
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
  

/*
  ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `detalle_temp_ibfk_1` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;
*/

