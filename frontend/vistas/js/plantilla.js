/*=============================================
PLANTILLA
Para que la plantilla de vista de la pantalla principal sea dinámica 
Se utiliza para traer los datos desde el Servidor, utilizando AJAX 
=============================================*/


$.ajax({

	url:"ajax/plantilla.ajax.php",
	success:function(respuesta)
	{
		// Se obtienen los valores que retorna AJAX.
		var colorFondo  = JSON.parse(respuesta).colorFondo;
		var colorTexto  = JSON.parse(respuesta).colorTexto;
		var barraSuperior  = JSON.parse(respuesta).barraSuperior;
		//console.log (JSON.parse(respuesta).barraSuperior);
		
		var textoSuperior   = JSON.parse(respuesta).textoSuperior;

		// Aplicando estilos, utilizando jQuery.
		$(".backColor, .backColor a").css({"background": colorFondo,"color": colorTexto})
		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior,"color": textoSuperior})
		/*
		var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
		
		$(".backColor, .backColor a").css({"background": colorFondo,
											"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, 
			                                       "color": textoSuperior})
	
*/

	}


});

