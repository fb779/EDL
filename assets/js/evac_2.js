$(document).ready(function() {
	
    var MaxInputs       = 10; //Número Maximo de Campos
    var contenedor       = $("#contenedor"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor div").length;
    var FieldCount = x; //para el seguimiento de los campos

    $(AddButton).click(function () {
        if(x <= MaxInputs) { //max input box allowed
            FieldCount++; // incremento de campos agregados
            //agregar campo
            $(contenedor).append('<div class="form-group"><div class="input-group"><span class="input-group-btn"><button class="btn btn-default eliminar" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span><input type="text" class="form-control" name="mitexto[]" id="campo_'+ FieldCount +'" ></div></div>');
            x++; //text box increment
        }
        
        if (x == MaxInputs) {
        	AddButton.removeClass('btn-info')
        	AddButton.addClass('disabled btn-danger');
        }
        	
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
        if( x > 0 ) {
            //debugger;
            //$(this).parent('div').remove(); //eliminar el campo
            $(this).parents('div .form-group').remove();
            AddButton.removeClass('disabled btn-danger');
            AddButton.addClass('btn-info');
            x--;
        }
        return false;
    });
});