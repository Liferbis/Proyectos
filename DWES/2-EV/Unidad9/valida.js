$(document).ready(function()
{
	function validarNombre()
	{
		if(nombre.val().length < 4) 
		{
			errorNombre.removeClass("oculto");
			return false;
		}
		errorNombre.addClass("oculto");
		return true;
	}
	
	
	function validarDNI()
	{
	
		if(dni.val().length != 9)
		{
			errorDNI.removeClass("oculto");
			return false;
		}
		
		// Función que comprueba si un número es un entero no negativo
        var isInteger = function(n)
        {
            var intRegex = /^\d+$/;
            if(intRegex.test(n)) return true;
            return false;
        }
		
		var valueDni=dni.val().substr(0,8);
		if(!isInteger(valueDni)) 
		{
			errorDNI.removeClass("oculto");
			return false;
		}
		
		var letra=dni.val().substr(8);
		var lockup = 'TRWAGMYFPDXBNJZSQVHLCKE';
		if(lockup.charAt(valueDni % 23)==letra)
		{
			errorDNI.addClass("oculto");
			return true;
		}
		errorDNI.removeClass("oculto");
		return false;
	}
	
	
	function validarPasswords()
	{
		if(password1.val().length < 6 || password1.val() != password2.val()) 
		{
			errorPassword.removeClass("oculto");
			return false;
		}
		errorPassword.addClass("oculto");
		return true;
	}
	
	
	function validar()
	{
		return validarNombre() && validarDNI()  && validarPasswords() ;
	}
	
	var nombre = $("#nombre");
	var password1 = $("#password1");
	var password2 = $("#password2");
	var dni = $("#DNI");
	var errorNombre = $("#errorNombre");
	var errorPassword = $("#errorPassword");
	var errorDNI = $("#errorDNI");
	
	$("#datos").submit(function()
	{
		if(validar()) 
			return true;
		else
			return false;
		
	});
});