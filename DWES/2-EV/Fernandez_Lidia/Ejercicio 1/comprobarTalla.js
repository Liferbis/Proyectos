$.validator.addMethod("comprobarTalla", function(value, element)
 {
 function comprobarTalla()
	{
		if(nombre.val().length < 3) 
		{
			var let='S';
			var letr='M';
			var letra='L';
			var letras='XL';
			if(nombre.val()==let.val()){

			}else if(nombre.val()==letr.val()){

			}else if(nombre.val()==letra.val()){

			}else if(nombre.val()==letras.val()){

			}
			errorTalla.removeClass("oculto");
			return false;
		}
		errorTalla.addClass("oculto");
		return true;
	}
 }, "