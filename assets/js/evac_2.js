$(document).ready(function() {
	
    var contenedor	= $("#contenedor"); //ID del contenedor
    var actividad	= $("#listActivi"); // ID div.body modal 
    
    //interaccion para agregar el div de la acividad del modal a la pagina
    $(actividad).on("click", ".addAct", function(e) {
    	debugger;
//		$(this).children().children().children().children().removeClass("glyphicon-plus");
//		$(this).children().children().children().children().addClass("glyphicon-remove");
//		$(this).removeClass("addAct"); // agregar clase eliminar al div.
//		$(this).addClass("eliminar"); // agregar clase eliminar al div.
//    	$(contenedor).append($(this));
    	
		
//		var item = $(this).clone();
//		$(item).children().children().children().children().removeClass("glyphicon-plus");
//		$(item).children().children().children().children().addClass("glyphicon-remove");
//		$(item).removeClass("addAct"); // agregar clase eliminar al div.
//		$(item).addClass("eliminar"); // agregar clase eliminar al div.
//		$(contenedor).append($(item)); // clona el elemento para agregarlo al listado
    	
    	
    	$(this).children().removeClass("glyphicon-plus");
		$(this).children().addClass("glyphicon-remove");
		$(this).removeClass("addAct"); // agregar clase eliminar al div.
		$(this).addClass("eliminar"); // agregar clase eliminar al div.
    	$(contenedor).append($(this).parents(".form-group"));
	});
    
    // interaccion para remover el item de el listado de la pagina y regresarlo al modal
    $(contenedor).on("click", ".eliminar", function(e) {
    	debugger;
		$(this).children().removeClass("glyphicon-remove");
		$(this).children().addClass("glyphicon-plus");
		$(this).removeClass("eliminar"); // agregar clase eliminar al div.
		$(this).addClass("addAct"); // agregar clase eliminar al div.
		var item = $(this).parents(".form-group")
    	$(actividad).append(item);
    	
    	//$(this).remove();
	});
    
    var lista = $("#listDisTab"); // Id del listado de la navbar
    var conte = $("#listDisForm");
    var total = $('#disTotales');
    var carac = $('#caracterizacion');
    var filCount = 0;
    $('#addDisp').click(function(){
    	debugger;
    	var x = lista.children().length + 1;
    	var vinculo = '<li><a href="#disp'+ x +'" data-toggle="tab">Disp '+ x +'</a></li>'
    	var panel = '<div class="tab-pane '+ ((x==1)?'active':'') +'" id="disp'+x+'"><div class="col-xs-12"> <h3> '+ $('#tituloDisp').val() +' </h3> </div> </div>';
    	
    	conte.append(panel)
    	var item = carac.clone();
    	item.removeClass('hidden');
    	item.find('input, select').each(function(index, element){
    		$(element).attr('name', $(element).attr('name') + x + index);
    	});
    	$('#disp' + x).append(item);
    	
    	lista.append(vinculo);
    	$('#removeDisp').prop('disabled', false);    	
	});
    
    $('#removeDisp').click(function(){
    	if (lista.length > 0 && conte.length > 0){
    		lista.children(':last-child').remove();
    		conte.children(':last-child').remove();
    	}
    	
    	if (lista.length == 0 && conte.length == 0){
    		$('#removeDisp').prop('disabled', true);
    	}
    	
    });

    if (lista.children().length > 0 && conte.children().length > 0){
    	$('#removeDisp').prop('disabled', false);
    }else { 
    	$('#removeDisp').prop('disabled', true);
    }
    
    
});