$(document).ready(function(){
	$('.mayusculas').on('keyup', function(){
		var v = $(this);
		v.val( v.val().toUpperCase());
		
	});

	/** Permitir solo numeros en los campos */
	$('.solo-numero').on('keyup', function (){
		this.value = (this.value + '').replace(/[^0-9]/g, '');
	});

	/** Evitar caracteres especiales */
	$('.no-especiales').on('keyup', function() {
		var regex = new RegExp("^[. 0-9a-zA-ZáéíóúñÁÉÍÓÚ\b]+$");
	    var _this = this;
	    
	    var texto = $(_this).val();
        if(!regex.test(texto)) {
	        $(_this).val(texto.substring(0, (texto.length-1)))
		}
	});

	/** Evitar caracteres especiales */
	$('.solo-letras').on('keyup', function() {
		var regex = new RegExp("^[ a-zA-ZáéíóúñÁÉÍÓÚ\b]+$");
	    var _this = this;
	    
	    var texto = $(_this).val();
        if(!regex.test(texto)) {
	        $(_this).val(texto.substring(0, (texto.length-1)))
		}
	});

	
	var $fr = $('#capitulo1');
	var color = '#a94442';
	
	if ($('[name="i1r1c1"]:checked').val() == 2){
		$(':input,select', $fr ).each(function(){
			$(this).prop('disabled', true);
		});
		$('#btnGuardar').prop('disabled', false);
		$('#idTipo').prop('disabled', false);
		$('#numero').prop('disabled', false);
		$('[name="i1r1c1"]').prop('disabled', false);
    }

	
	/** Variables para el manejo de las caracterizaciones dinamicas */
	var lista = $("#listDisTab"); // Div del listado de la navbar
    var conte = $("#listDisForm"); // Div contenedor para agregar la caracterización
    var total = $('#disTotales'); // Div del contenedor de los campos de totales
    var carac = $('#caracterizacion'); // Div con los campos de la caracterizacion fuera del form
    /** Variables para el manejo de las caracterizaciones dinamicas */


	
	$('[name="i1r1c1"]').on('change',function(){
		if ( parseInt($(this).val()) == 2 ){
			
			// retiramos los vicculos de la caracterización
			lista.children().each(function(){ 
				$(this).remove();
			});

			// retiramos las caracterizaciones existentes
			conte.children().each(function(){ 
				$(this).remove();
			});

			// desabilitamos todos los campos del formulario 
			$(':input,select', $fr).each(function(){
				$(this).prop('disabled', true);
			});
			
			validar_totales();
		}else{
			$(':input,select', $fr ).each(function(){
				$(this).prop('disabled', false);
			});
			$('#removeDisp').prop('disabled', true);
			$('#idir3c9').prop('disabled', true);
		}

		
		$('#btnGuardar').prop('disabled', false);
		$('#idTipo').prop('disabled', false);
		$('#numero').prop('disabled', false);
		$('[name="i1r1c1"]').prop('disabled', false);
		$('#idi1r3c9').prop('disabled',true)
	});

	/** Validacion de los checkbox con la carga de la pagina */
	var $chk = $('#medPub [type="checkbox"]');
	if (!valChackbox()){
		$chk.prop('required',true);
		//$chk.parent().parent().parent().parent().addClass('has-error');
		//$('#msCheck').append('<label class="col-xs-12">Debe seleccionar almeno una de las opciones</label>');
	}else{$chk.prop('required',false);}

	/** Validacion de los checkbox con el cambio de alguno de ellos */
	$('#medPub').on('change', '[type="checkbox"]', function(){
		
		$('#msCheck').children('label').remove();
		var item = $(this);
		if(item.is(':checked')){
			item.val(1);
			if(item.attr('name') ==  'i1r3c8'){
				$('[name="i1r3c9"]').prop('disabled', false);
			}
		}else{ 
			item.val(0);
			if(item.attr('name') ==  'i1r3c8'){
				$('[name="i1r3c9"]').val('');
				$('[name="i1r3c9"]').parent().parent().removeClass('text-danger');
				$('[name="i1r3c9"]').parent().parent().removeClass('has-error');
				$('[name="i1r3c9"]').css('border',"");
				$('[name="i1r3c9"]').parent().parent().children('span').remove();
				$('[name="i1r3c9"]').prop('disabled', true);
			} 
		}
		
		var $chk = $('#medPub [type="checkbox"]');
		if (!valChackbox()){	
			$chk.prop('required',true);
			$chk.parent().parent().parent().parent().addClass('has-error');
			$('#msCheck').append('<label class="col-xs-12">Debe seleccionar almeno una de las opciones</label>');
		}else{$chk.parent().parent().parent().parent().removeClass('has-error'); $chk.prop('required',false);}
	});

	$('#idi1r3c9').on('blur', function(){
		$(this).parent().parent().removeClass('text-danger');
		$(this).parent().parent().removeClass('has-error');
		$(this).css('border',"");
		$(this).parent().parent().children('span').remove();
		
		if ( $(this).val() == '' ){
			$(this).parent().parent().addClass('text-danger');
			$(this).css('border',"1px solid "+color);
			$(this).parent().parent().append('<span> Debe diligenciar el campo</span>');
		}					
	});

	/** Validacion del campo Certificacion y adicional validacion de los checkbox */
	if ($('[name="i1r3c8"]').is(':checked')){
		$('input[name="i1r3c9"]').prop('disabled', false);
	}else{
		$('[name="i1r3c9"]').val('');
		$('[name="i1r3c9"]').parent().parent().removeClass('text-danger');
		$('[name="i1r3c9"]').parent().parent().children('span').remove();
		$('[name="i1r3c9"]').prop('disabled', true);
	}

	$('#idi1r4c1').on('blur', function(){
		
		$(this).css('border',"");
		$(this).parent().parent().removeClass('text-danger');
		$(this).parent().parent().children('span').remove();
		var val = parseInt($(this).val());
		var vac = parseInt($('#idi1r2ctv').val());
		if ( !isNaN(val) ){
			if( val > vac ){
				$(this).val('');
				$(this).css('border',"solid 0.5px "+color);
				$(this).parent().parent().addClass('text-danger');
				$(this).parent().parent().append('<span class="">El valor del campo no puede ser mayor al total de vacantes</span>');
				//alert('El valor del campo no puede ser mayor al total de vacantes');
			}
		}else{
			$(this).css('border',"solid 1px "+color);
			$(this).parent().parent().addClass('text-danger');
			$(this).parent().parent().append('<span class="">Debe ingresar un valor de 0 - 999 en el campo</span>');
			//alert('El valor del campo deber ser numerico');
		}
		
		var $chk = $('#medPub [type="checkbox"]');
		if (!valChackbox()){
			$chk.prop('required',true);
			$chk.parent().parent().parent().parent().addClass('has-error');
			$('#msCheck').children('label').remove();
			$('#msCheck').append('<label class="col-xs-12">Debe seleccionar almeno una de las opciones</label>');
		}//else{$chk.parent().parent().parent().parent().removeClass('has-error'); $chk.prop('required',false);}
	});

/** Funcionalidad paran el maenjo de las caracterizaciones dinamicas **/
	
    /** Habilita o deshabilita el boton de eliminar caracterizaciones */
    if (lista.children().length > 0 && conte.children().length > 0){
    	$('#removeDisp').prop('disabled', false);
    	//lista.removeClass('hidden');
    }else {
    	$('#removeDisp').prop('disabled', true);
    	//lista.addClass('hidden');
    }

	/** Boton para agregar caracterizacion nueva */
    $('#addDisp').click(function(){
    	var x = lista.children().length + 1;
    	var vinculo = '<li class="'+ ((x==1)?'active':'') +'"><a href="#disp'+ x +'" data-toggle="tab">Disp '+ x +'</a></li>';
    	var panel = '<div class="tab-pane '+ ((x==1)?'active':'') +'" id="disp'+x+'"> <div class="col-xs-12"> <h4 class="text-danger">Todos los campos son obligatorios</h4> </div></div>';
    	
    	lista.append(vinculo);
    	conte.append(panel)
    	
    	var item = carac.clone();
    	item.removeClass('hidden');
    	item.attr('id', 'caracteriza' + x);
    	item.find('input, select').each(function(index, element){
    		//$(element).addClass('validar');
    		$(element).attr('name', $(element).attr('name') + x + index);
    	});
    	$('#disp' + x).append(item);
    	
    	if (lista.length > 0 && conte.length > 0){
    		$('#removeDisp').prop('disabled', false); 
    		lista.removeClass('hidden');
    	}
    	validar_totales();
    	
	});

	/** Boton para eliminar caracterizacion */
    $('#removeDisp').click(function(){
    	if (lista.children().length > 0 && conte.children().length > 0){
    		lista.children(':last-child').remove();
    		conte.children(':last-child').remove();
    	}
    	
    	if (lista.children().length == 0 && conte.children().length == 0){
    		//$('#removeDisp').addClass('disabled');
    		$('#removeDisp').prop('disabled', true);
    		lista.addClass('hidden');
    	}

    	validar_totales();
    });

    /** Funciona para validar los cambios y comportamientos de cada input */
    $('#listDisForm').on('keyup', '.validar', function(){
    	if ($(this).hasClass('solo-numero')){
    		this.value = (this.value + '').replace(/[^0-9]/g, '');
		}
	});
	
    $('#listDisForm').on('change, blur', '.validar', function(){
    	$(this).css('border',"");
		$(this).parent().parent().removeClass('text-danger');
		$(this).parent().parent().children('span').remove();
		
	    var $ele = $('#listDisForm');
		var pnal = $(this, $ele).parents('div .active').attr('id').substring(4);
		var vacAbi = 'i1r2c' + pnal + '0';
		
		var vacCub = 'i1r2c' + pnal + '8';
		var vacHom = 'i1r2c' + pnal + '9';
		var vacMuj = 'i1r2c' + pnal + '10';
		var vacNoCub = 'i1r2c' + pnal + '11';
		var vacNoCubCa = 'i1r2c' + pnal + '12';
		var edad = 'i1r2c' + pnal + '4';
		var sal = 'i1r2c' + pnal + '6';
		var cual = 'i1r2c' + pnal + '13';
		
		if( $(this).attr('name') === vacAbi){ /** interaccion con el total de vacantes por disponibilidad */
			var vac = parseInt($(this).val());
			
			if ( !isNaN(vac) && vac > 0 ){
				if ( vac < parseInt($('[name="'+vacCub+'"').val()) ){
					$('[name="'+vacCub+'"').val('0');
					$('[name="'+vacHom+'"').val('0');
					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($('[name="'+vacHom+'"').val()) );
					$('[name="'+vacNoCub+'"').val( parseInt( $('[name="'+vacAbi+'"').val()) - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
				}else if( !isNaN(parseInt($('[name="'+vacCub+'"').val())) && !isNaN(parseInt($('[name="'+vacHom+'"').val())) ){
					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($('[name="'+vacHom+'"').val()) );
					$('[name="'+vacNoCub+'"').val( vac - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
    			}
				
				if (parseInt($('[name="'+vacNoCub+'"').val()) > 0){ // validacion para activar la seleccion de vacantes no cubiertas
	    			$('[name="'+vacNoCubCa+'"]').prop('disabled', false);
	    		}else{
	    			$('[name="'+vacNoCubCa+'"]').val('');
	    			$('[name="'+vacNoCubCa+'"]').parent().parent().removeClass('text-danger');
	    			$('[name="'+vacNoCubCa+'"]').parent().parent().children('span').remove();
	    			$('[name="'+vacNoCubCa+'"]').css('border',"");
	    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
	    			$('[name="'+cual+'"]').parent().parent().removeClass('text-danger');
	    			$('[name="'+cual+'"]').parent().parent().children('span').remove();
	    			$('[name="'+cual+'"]').parent().parent().removeClass('has-error');
	    			$('[name="'+cual+'"]').css('border',"");
	    			$('[name="'+cual+'"]').prop('required', false);
	    			$('[name="'+cual+'"]').prop('disabled', true);
		    	}
			}else{
    			$(this).val('');
				$('[name="'+vacCub+'"').val('');
				$('[name="'+vacHom+'"').val('');
				$('[name="'+vacMuj+'"').val('');
				$('[name="'+vacNoCub+'"').val(''); // vacantes no cubiertas

				$('[name="'+vacNoCubCa+'"]').val('');
				$('[name="'+vacNoCubCa+'"]').parent().parent().removeClass('text-danger');
				$('[name="'+vacNoCubCa+'"]').parent().parent().children('span').remove();
				$('[name="'+vacNoCubCa+'"]').css('border',"");
    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
    			$('[name="'+cual+'"]').parent().parent().removeClass('text-danger');
    			$('[name="'+cual+'"]').parent().parent().children('span').remove();
    			$('[name="'+cual+'"]').parent().parent().removeClass('has-error');
    			$('[name="'+cual+'"]').css('border',"");
    			$('[name="'+cual+'"]').prop('required', false);
    			$('[name="'+cual+'"]').prop('disabled', true);
    			
				$(this).parent().parent().addClass('text-danger');
				$(this).css('border',"1px solid" + color);
				$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor numerico de 1 - 999 en el campo</span>');
	    	}
		}else if ( $(this).attr('name') === vacCub ){ /** interaccion con el total de vacantes cubiertas por disponibilidad */
			var vacCu = parseInt($(this).val());
			if ( !isNaN(vacCu)  ){
				if( vacCu <= parseInt($('[name="'+vacAbi+'"]').val()) && !isNaN(parseInt($('[name="'+vacAbi+'"]').val()))  ){
    				if (vacCu >= parseInt($('[name="'+vacHom+'"').val()) ){
    					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($('[name="'+vacHom+'"').val()) );
    					$('[name="'+vacNoCub+'"').val( parseInt( $('[name="'+vacAbi+'"').val()) - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
	    			}else {
	    				$('[name="'+vacHom+'"').val('0');
    					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($('[name="'+vacHom+'"').val()) );
    					$('[name="'+vacNoCub+'"').val( parseInt( $('[name="'+vacAbi+'"').val()) - parseInt($('[name="'+vacCub+'"').val()) ); // vacantes no cubiertas
		    		}

					if (parseInt($('[name="'+vacNoCub+'"').val()) > 0){
		    			$('[name="'+vacNoCubCa+'"]').prop('disabled', false);
		    		}else{
		    			$('[name="'+vacNoCubCa+'"]').val('');
		    			$('[name="'+vacNoCubCa+'"]').parent().parent().removeClass('text-danger');
		    			$('[name="'+vacNoCubCa+'"]').parent().parent().children('span').remove();
		    			$('[name="'+vacNoCubCa+'"]').css('border',"");
		    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
		    			$('[name="'+cual+'"]').parent().parent().removeClass('text-danger');
		    			$('[name="'+cual+'"]').parent().parent().children('span').remove();
		    			$('[name="'+cual+'"]').parent().parent().removeClass('has-error');
		    			$('[name="'+cual+'"]').css('border',"");
		    			$('[name="'+cual+'"]').prop('required', false);
		    			$('[name="'+cual+'"]').prop('disabled', true);
			    	}
				}else{
					$(this).val('');
					$('[name="'+vacHom+'"').val('');
					$('[name="'+vacMuj+'"').val('');
					$('[name="'+vacNoCub+'"').val(''); // vacantes no cubiertas
					
					$('[name="'+vacNoCubCa+'"]').val('');
					$('[name="'+vacNoCubCa+'"]').parent().parent().removeClass('text-danger');
					$('[name="'+vacNoCubCa+'"]').parent().parent().children('span').remove();
					$('[name="'+vacNoCubCa+'"]').css('border',"");
	    			$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
	    			$('[name="'+cual+'"]').parent().parent().removeClass('text-danger');
	    			$('[name="'+cual+'"]').parent().parent().children('span').remove();
	    			$('[name="'+cual+'"]').parent().parent().removeClass('has-error');
	    			$('[name="'+cual+'"]').css('border',"");
	    			$('[name="'+cual+'"]').prop('required', false);
	    			$('[name="'+cual+'"]').prop('disabled', true);
	    			
					$(this).parent().parent().addClass('text-danger');
					$(this).css('border',"1px solid" + color);
					$(this).parent().parent().append('<span>Debe ingresar un valor menor o igual al numero de vacantes abiertas</span>');
				}
				
    		}else{
    			$('[name="'+vacCub+'"').val('');
				$('[name="'+vacHom+'"').val('');
				$('[name="'+vacMuj+'"').val('');
				$('[name="'+vacNoCub+'"').val(''); // vacantes no cubiertas
				$('[name="'+cual+'"]').prop('disabled', true);
				$('[name="'+vacNoCubCa+'"]').prop('disabled', true);
				$(this).parent().parent().addClass('text-danger');
				$(this).css('border',"1px solid" + color);
				$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor numerico de 0 - 999 en el campo</span>');
	    	}
    		
			
			
		}else if( $(this).attr('name') === vacHom ){ /** interaccion con el total de vacantes cubiertas por disponibilidad */
			var vacHo = parseInt($(this).val());
			if ( !isNaN(vacHo) ){
				if ( vacHo <= parseInt($('[name="'+vacCub+'"').val()) ){
					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($(this).val()) );
				}else{
					$(this).val('');
					$('[name="'+vacMuj+'"').val( parseInt( $('[name="'+vacCub+'"').val()) - parseInt($(this).val()) );
					$(this).parent().parent().addClass('text-danger');
					$(this).css('border',"1px solid" + color);
					$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor menor o igual al numero de vacantes cubiertas</span>');
				}
    		}else{
    			//$(this).val('0');
				$('[name="'+vacMuj+'"').val('');
				$(this).parent().parent().addClass('text-danger');
				$(this).css('border',"1px solid" + color);
				$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor numerico de 0 - 999 en el campo</span>');
	    	}
			
				
		}else if( $(this).attr('name') === vacNoCubCa && $(this).val() != ''){
			if ($('[name="'+vacNoCubCa+'"').val() == '7'){
    			$('[name="'+cual+'"]').prop('disabled', false);
    			$('[name="'+cual+'"]').prop('required', true);
    		} else {
    			$('[name="'+cual+'"]').parent().parent().removeClass('text-danger');
    			$('[name="'+cual+'"]').parent().parent().children('span').remove();
    			$('[name="'+cual+'"]').parent().parent().removeClass('has-error');
    			$('[name="'+cual+'"]').css('border',"");
    			$('[name="'+cual+'"]').prop('required', false);
    			$('[name="'+cual+'"]').prop('disabled', true);
	    	}
		}else{
			if($(this).val() == ''){
				$(this).parent().parent().addClass('text-danger');
				$(this).css('border',"1px solid" + color);

				if ($(this).is('select')){
					$(this).parent().parent().append('<span class="text-danger">Debe seleccionar una opcion</span>');
				}else if( $(this).attr('name') == edad ){
					$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor numerico de 0 - 999 en el campo</span>');
				}else if( $(this).attr('name') == sal ){
					$(this).parent().parent().append('<span class="text-danger">Debe ingresar un valor en el campo de 0 - 999999999 en el campo</span>');
				}else if( $(this).attr('name') == cual ){
					$(this).parent().parent().append('<span class="text-danger">El campo no puede estar vacio</span>');
				}else if( $(this).attr('name') == vacMuj ){
					$(this).parent().parent().removeClass('text-danger');
					$(this).css('border',"");				    			
				}else if( $(this).attr('name') == vacNoCub ){
					$(this).parent().parent().removeClass('text-danger');
					$(this).css('border',"");
				}
			}	
		}

		validar_totales();
    });
}); //$(document).ready()



function validar_totales(){
	/** Actualizacion de total de vacantes */
	var sumTotVac = 0, sumTotVacCub = 0, sumTotVacNoCub = 0;
	$('#listDisForm').children().each(function(){
		var pnal = $(this).attr('id').substring(4);
		var vacantes = 'i1r2c' + pnal + '0';
		var vacCubiertas = 'i1r2c' + pnal + '8';
		var vacNoCubiertas = 'i1r2c' + pnal + '11';
		$(this).find(':input').each(function(){
			if ($(this).attr('name') == vacantes && $(this).val() != '' ){
				sumTotVac += parseInt($(this).val());
			}
			if ($(this).attr('name') == vacCubiertas && $(this).val() != '' ){
				sumTotVacCub += parseInt($(this).val());
			}
			if ($(this).attr('name') == vacNoCubiertas && $(this).val() != '' ){
				sumTotVacNoCub += parseInt($(this).val());
			}
		});
	});
	$('#idi1r2ctv').val(sumTotVac);
	$('#idi1r2ctvcb').val(sumTotVacCub);
	$('#idi1r2ctvnocb').val(sumTotVacNoCub);
}

function valChackbox(){
	/** Metodo para verificar si almeno uno de los checkbox ha sido seleccionado */
	var ct = 0;
	$('#medPub [type="checkbox"]').each(function(){ if($(this).prop('checked')){  ct ++; } });
	return (ct>0)?true:false;
}