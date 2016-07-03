$(document).ready(function() {
	
    var contenedor	= $("#contenedor"); //ID del contenedor
    var actividad	= $("#listActivi"); // ID div.body modal 
    
    //interaccion para agregar el div de la acividad del modal a la pagina
    $(actividad).on("click", ".addAct", function(e) {
    	$(this).children().removeClass("glyphicon-plus");
		$(this).children().addClass("glyphicon-remove");
		$(this).removeClass("addAct"); // agregar clase eliminar al div.
		$(this).addClass("eliminar"); // agregar clase eliminar al div.
    	$(contenedor).append($(this).parents(".form-group"));
	});
    
    // interaccion para remover el item de el listado de la pagina y regresarlo al modal
    $(contenedor).on("click", ".eliminar", function(e) {
		$(this).children().removeClass("glyphicon-remove");
		$(this).children().addClass("glyphicon-plus");
		$(this).removeClass("eliminar"); // agregar clase eliminar al div.
		$(this).addClass("addAct"); // agregar clase eliminar al div.
		var item = $(this).parents(".form-group")
    	$(actividad).append(item);
	});
    
    /** Funcion para el manejo de caracterizaciones de empleo de forma dinamica */
    
    var lista = $("#listDisTab"); // Div del listado de la navbar
    var conte = $("#listDisForm"); // Div contenedor para agregar la caracterización
    var total = $('#disTotales'); // Div del contenedor de los campos de totales
    var carac = $('#caracterizacion');
    
    if (lista.children().length > 0 && conte.children().length > 0){
    	$('#removeDisp').removeClass('disabled');
    	$('#removeDisp').prop('disabled', false);
    }else { 
    	$('#removeDisp').addClass('disabled');
    	$('#removeDisp').prop('disabled', true);
    }
    
//    $('#addDisp').click(function(){
//    	/** Funcion que carga un contenido por ajax */
//    	debugger;
//    	$.ajax({
//    		url: 'http://localhost/EDL/home/load_div',
//            //type:'POST',
//            //dataType: 'json',
//            success: function(data){
//            	debugger;
//                $('#listDisForm').append(data);
//            } // End of success function of ajax form
//		}); // End of ajax call 
//    });
    
    $('#addDisp').click(function(){
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
    	if (lista.length > 0 && conte.length > 0){
    		$('#removeDisp').removeClass('disabled');
    		$('#removeDisp').prop('disabled', false); 
    	}
	});
    
    $('#removeDisp').click(function(){
    	if (lista.children().length > 0 && conte.children().length > 0){
    		lista.children(':last-child').remove();
    		conte.children(':last-child').remove();
    	}
    	
    	if (lista.children().length == 0 && conte.children().length == 0){
    		$('#removeDisp').addClass('disabled');
    		$('#removeDisp').prop('disabled', true);
    	}
    	
    });
    
    /** se debe determinar el id del div panel para conocer a cual panel pertenece i1r1xxyy
     * dado que no se puede determinar xx con este metodo */
//	$("#listDisForm :input").each(function(index){
//		console.log($(this).attr('name'));
//	});
	
    $('#calcTotalDisp').click(function(){
    	var sum = 0;
    	$('#listDisForm').children().each(function(){
    	  var pnal = $(this).attr('id').substring(4)
    	  $(this).find(':input,select').each(function(){
    	    var name = 'i1r2c' + pnal + '0';
    	    if ($(this).attr('name') == name && $(this).val() != '' ){
    	      sum += parseInt($(this).val());
    	      $('#idi1r2ctv').val(sum);
    	    }
    	  });
    	});
    });	
	
    $('#listDisForm input').change(function(){
    	debugger;
    	console.log($(this).val());
    });
	
});
























