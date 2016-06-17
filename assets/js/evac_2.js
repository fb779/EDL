$(document).ready(function() {

    var MaxInputs       = 5; //Número Maximo de Campos
    var contenedor       = $("#contenedor"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor div").length + 1;
    var FieldCount = x-1; //para el seguimiento de los campos

    $(AddButton).click(function (e) {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(contenedor).append('<div class="form-group"><label for=""><a href="#" class="eliminar">&times;</a></label><input class="form-control" type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'"/></div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
        if( x > 1 ) {
            debugger;
            //$(this).parent('div').remove(); //eliminar el campo
            $(this).parent('div').css({
                "background": "red"
            });
            $(this).parent('div').remove(); //eliminar el campo
            x--;
        }
        return false;
    });
});