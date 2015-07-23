$("aceptarW").off('click').on('click', function() {
	function(cod, FechaI, medio1, FechaF, medio2, tipe, descrip){
		return $.post("../include/introducir.php", {"empleado":empleado, "FechaI":fechaI, "medio1":medio1, "FechaF":fechaF, "medio2":medio2, "tipe":tipe, "descrip":descrip
		})
	} 
});