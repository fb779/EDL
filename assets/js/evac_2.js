$(document).ready(function() {
	
    var contenedor	= $("#contenedor"); //ID del contenedor
    var actividad	= $("#listActivi"); // ID div.body modal 
    
    //interaccion para agregar el div de la acividad del modal a la pagina
    $(actividad).on("click", ".addAct", function(e) {
		$(this).children().children().children().children().removeClass("glyphicon-plus");
		$(this).children().children().children().children().addClass("glyphicon-remove");
		$(this).removeClass("addAct"); // agregar clase eliminar al div.
		$(this).addClass("eliminar"); // agregar clase eliminar al div.
    	$(contenedor).append($(this));
    	
		
//		var item = $(this).clone();
//		$(item).children().children().children().children().removeClass("glyphicon-plus");
//		$(item).children().children().children().children().addClass("glyphicon-remove");
//		$(item).removeClass("addAct"); // agregar clase eliminar al div.
//		$(item).addClass("eliminar"); // agregar clase eliminar al div.
//		$(contenedor).append($(item)); // clona el elemento para agregarlo al listado
	});
    
    // interaccion para remover el item de el listado de la pagina y regresarlo al modal
    $(contenedor).on("click", ".eliminar", function(e) {
		$(this).children().children().children().children().removeClass("glyphicon-remove");
		$(this).children().children().children().children().addClass("glyphicon-plus");
		$(this).removeClass("eliminar"); // agregar clase eliminar al div.
		$(this).addClass("addAct"); // agregar clase eliminar al div.
    	$(actividad).append($(this));
    	
    	//$(this).remove();
	});    
});