/*=============================================
CABEZOTE
=============================================*/

// Es el boton donde despliega las categorias.
$("#btnCategorias").click(function(){

	// Se determina que ancho tiene la ventana.
	if(window.matchMedia("(max-width:767px)").matches)
	{
		$("#btnCategorias").after($("#categorias").slideToggle("fast"))
	}
	else
	{
		$("#cabezote").after($("#categorias").slideToggle("fast"))		
	}

		
}) 