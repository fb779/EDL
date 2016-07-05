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
    	var vinculo = '<li class="'+ ((x==1)?'active':'') +'"><a href="#disp'+ x +'" data-toggle="tab">Disp '+ x +'</a></li>'
//    	var panel = '<div class="tab-pane '+ ((x==1)?'active':'') +'" id="disp'+x+'"><div class="col-xs-12"> <h3> '+ $('#tituloDisp').val() +' </h3> </div> </div>';
    	var panel = '<div class="tab-pane '+ ((x==1)?'active':'') +'" id="disp'+x+'"><div class="col-xs-12"></div> </div>';
    	
    	lista.append(vinculo);
    	conte.append(panel)
    	
    	var item = carac.clone();
    	item.removeClass('hidden');
    	item.find('input, select').each(function(index, element){
    		$(element).addClass('validar');
    		$(element).attr('name', $(element).attr('name') + x + index);
    	});
    	$('#disp' + x).append(item);
    	
    	if (lista.length > 0 && conte.length > 0){
    		$('#removeDisp').removeClass('disabled');
    		$('#removeDisp').prop('disabled', false); 
    	}
    	
    	$(document).ready();
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
	
//    $('#calcTotalDisp').click(function(){
//    	var sum = 0;
//    	$('#listDisForm').children().each(function(){
//    	  var pnal = $(this).attr('id').substring(4)
//    	  $(this).find(':input,select').each(function(){
//    	    var name = 'i1r2c' + pnal + '0';
//    	    if ($(this).attr('name') == name && $(this).val() != '' ){
//    	      sum += parseInt($(this).val());
//    	      $('#idi1r2ctv').val(sum);
//    	    }
//    	  });
//    	});
//    });	
	
//    $('form :input').on('change',function(){
//    	debugger;
//    });
//    
//    $('#listDisForm').on('').change(function(){
//    	debugger;
//    	console.log($(this).val());
//    });
//    $(document).on('submit','#disForm :input', function() {
//    	  debugger; // Does some stuff and logs the event to the console
//    	});
    
    /** Funciona para validar los cambios y comportamientos de cada input */
    $('#listDisForm').on('change', '.validar', function(){
	    
	    var $ele = $('#listDisForm');
	    //console.log($(this, $ele).parents('div .active').attr('id'));
		var pnal = $(this, $ele).parents('div .active').attr('id').substring(4);
		var vacAbi = 'i1r2c' + pnal + '0';
		var vacCub = 'i1r2c' + pnal + '8';
		var vacHom = 'i1r2c' + pnal + '9';
		var vacMuj = 'i1r2c' + pnal + '10';
		var vacNoCub = 'i1r2c' + pnal + '11';
		var vacNoCubCa = 'i1r2c' + pnal + '12';
		var cual = 'i1r2c' + pnal + '13';

		debugger;
		
		if( $(this).attr('name') === vacAbi && $(this).val() <= $('[name="i1r1c2"]').val() ){ /** interaccion con el total de vacantes por disponibilidad */
			$('[name="'+vacNoCub+'"').val( parseInt( $('[name="'+vacAbi+'"').val()) - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
			if (parseInt($('[name="'+vacNoCub+'"').val()) > 0){
    			$('[name="'+vacNoCubCa+'"]').prop('disabled', false);
    		}else{
    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
	    	}	
		} else {
			$('[name="'+vacAbi+'"').val('0');

		}

		if( $(this).attr('name') === vacCub && parseInt($(this).val()) <= parseInt($('[name="'+vacAbi+'"]').val()) ){ /** interaccion con el total de vacantes cubiertas por disponibilidad */
			$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($('[name="'+vacHom+'"').val()) );
			$('[name="'+vacNoCub+'"').val( parseInt( $('[name="'+vacAbi+'"').val()) - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
			if (parseInt($('[name="'+vacNoCub+'"').val()) > 0){
    			$('[name="'+vacNoCubCa+'"]').prop('disabled', false);
    		}else{
    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
	    	}
		}else{
			$('[name="'+vacCub+'"').val('0');
		}

		if( $(this).attr('name') === vacHom ){ /** interaccion con el total de vacantes cubiertas por disponibilidad */
			$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($(this).val()) );
		}
		
		if( $(this).attr('name') === vacNoCubCa  ){
			if ($('[name="'+vacNoCubCa+'"').val() == '7'){
    			$('[name="'+cual+'"]').prop('disabled', false);
    			$('[name="'+cual+'"]').prop('required', true);
    		} else {
    			$('[name="'+cual+'"]').prop('disabled', true);
    			$('[name="'+cual+'"]').prop('required', false);
	    	}
		}

    	validar_totales();
    });
});


function validar_totales(){
	/** Actualizacion de total de vacantes */
	var sumTotVac = 0, sumTotVacCub = 0, sumTotVacNoCub = 0;
	$('#listDisForm').children().each(function(){
		var pnal = $(this).attr('id').substring(4);
		var totalVac = 'i1r2c' + pnal + '0';
		var totalVacCub = 'i1r2c' + pnal + '8';
		var totalVacNoCub = 'i1r2c' + pnal + '11';
		$(this).find(':input,select').each(function(){	
			if ($(this).attr('name') == totalVac && $(this).val() != '' ){
				sumTotVac += parseInt($(this).val());
				$('#idi1r2ctv').val(sumTotVac);
			}
			if ($(this).attr('name') == totalVacCub && $(this).val() != '' ){
				sumTotVacCub += parseInt($(this).val());
				$('#idi1r2ctvcb').val(sumTotVacCub);
			}
			if ($(this).attr('name') == totalVacNoCub && $(this).val() != '' ){
				sumTotVacNoCub += parseInt($(this).val());
				$('#idi1r2ctvnocb').val(sumTotVacNoCub);
			}
		});
	});
}























