$( document ).on( "pagecreate", "#intro", function() {

	var set_intro = function(empleado, fechaI, medio1, fechaF, medio2, tipo, descrip) {
        return $.post("include/introducir.php", {"empleado":empleado, "FechaI":fechaI, "medio1":medio1, "FechaF":fechaF, "medio2":medio2, "tipe":tipo, "descrip":descrip
		});
    }

	$("#FechaI").off('click').on('click', function(event) {
        $('#fecha_Inicio a').click();
    });

    $("#FechaF").off('click').on('click', function(event) {
        $('#fecha_Fin a').click();
    });

    $("#intro").on("click", "[name='aceptarW']", function(event) {
    	event.preventDefault();
    	popupLoader("Introduciendo datos")
        var empleado = $("#empleado").val();
        var fechaI = $("#FechaI").val();
        var fechaF = $("#FechaF").val();
        var tipo = $("#tipe").val(); 
        if($("[name='medio1']").attr("data-cacheval")=='false') {
        	var medio1=$("[name='medio1']").val();
        } else {
        	var medio1 = 0;
        }
        if($("[name='medio2']").attr("data-cacheval")=='false') {
        	var medio2=$("[name='medio2']").val();
        } else {
        	var medio2 = 0;
        }
        var descrip = $("#descrip").val();
        set_intro(empleado, fechaI, medio1, fechaF, medio2, tipo, descrip).done( function( response ) {
                if( response.success) {
                     setTimeout(function() {
                               window.open("index.php#correcto", "_self");
                     }, 1000);
                } else {
                    setTimeout(function() {
                               window.open("index.php#error", "_self");
                    }, 1000);
                }
           }).fail(function(jqXHR, textStatus, errorThrown ) {
                  popupLoader("Ha habido un error");
                            setTimeout(function() {
                                 $.mobile.loading( 'hide');
                            }, 1000);
                            alert(jqXHR.responseText);
           });
    });
});