$( document ).on( "pagecreate", "#intro", function() {
	$("#FechaI").off('click').on('click', function(event) {
        $('#fecha_Inicio a').click();
    });

    $("#FechaF").off('click').on('click', function(event) {
        $('#fecha_Fin a').click();
    });
});