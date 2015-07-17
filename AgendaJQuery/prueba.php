<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		
		<title>JQuery Mobile</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />-->
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<!--<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
		<style>
			.test{
				background: red;
			}
		</style>-->
		<script>
			//definicion de una variable global
			//	var seleccion;

			$(document).on('ready', function(){
			//CASO 1				
				//asignamos a la variable global el valor de la clase del div: 
				//	seleccion = $(".miDiv");
				
				//si existe la clase
				//	if(seleccion.length)
						//en el apartado de consola te miestra el resultado
						//	console.log('Existen: '+ seleccion.length);
				//else
						//	console.log('No Existen');

				//escribe en todas las etiquetas  div!!
				//	$('div').text("Hola esto es una prueba");

				//escribe en la clase que no se llame cl1:
				//	seleccion.not('.cl1').text("Este elemento no tiene la clase  .cl1")
				
				//escribe en la donde se encuentre la etiqueta "p" :
				//	seleccion.has('p').text("Este elemento tiene una etiqueta <p> en su contenido")
//----------------------------------------------------------------------------------------------------------//
			//CASO 2
				//asignamos a la variable global el valor de la etiqueta li:
				//	seleccion = $('li');

				//escribimos en la primera etiqueta li
				//	seleccion.first().html('<strong>Soy el elemento 0 </strong>');

				//escribimos en la segunda etiqueta li
				//	seleccion.eq(2).html('<strong>Soy el elemento 2 </strong>');
//----------------------------------------------------------------------------------------------------------//
			//CASO 3
				//devuelve una alerta con el texto plano quue existe dentro de las etiquetas <p>
				//	seleccion = $('#parrafo').html;
				//	alert(seleccion);

				//asigna una clase a una etiqueta con un id (id="prueba")
				//	$('#prueba').attr("class", "ejemplo");

				//sirve para obtener el id 
				//	seleccion = $('#prueba').attr("id");
				//	alert(seleccion);

				//si queremos que el nombre de la clase lo de una funcion
				//	$("#prueba").attr("class", function(){
				//		var cadena = "Hola_Mundo";
				//		return cadena;
				//	});
				//	var clase = $("#prueba").attr("class");
				//	alert(clase);


//----------------------------------------------------------------------------------------------------------//
			//CASO 4
				//funcion on click
				//	$(document).on("click", function(){
						//si no existe añades una clase
						//	$("#test").addClass("test");
						
						//si existe elimina la clase
						//	$("#test").removeClass("test");
	
						//si tiene la clase, la borra haciendo un remove, YY si no tiene la clase la pone
						//	$("#test").toggleClass("test");
	
						//jugando con clases y textos
						//	if($("#test").hasClass("test"))
								//	$("#test").text("Tengo la class='text'");
						//	else
								//	$("#test").text("NO tengo la class='text'");
				//	})	
//----------------------------------------------------------------------------------------------------------//
			//CASO 5
				//alerta cuando pulsas un enlace y se te abre una nueva pestaña

				//	$('a').on("click", function(e){
				//		e.preventDefault();
				//		var link = $(this).attr('href');
				//		alert("Usted está saliendo de nuestro sitio");
				//		location.href = link;
				//	});
//----------------------------------------------------------------------------------------------------------//
			//CASO 6
				//

				//	$('button').on('click', function(){
						//el primer elemento se convierte en el último
						//	$('ol li:first').appendTo('ol:first');
						//Otra forma de ponerlo:
							//$('ol:first').append($('ol li:first'));
						
						//Poner el Ultimo el primero
						//	$('ol li:last').prependTo('ol:first');
						//Otra forma de ponerlo:
						//	$('ol:first').prepend($('ol li:last'));

						//Metodo isertar despues de...(div id='e1')
						//	$('ol li:first').insertAfter('#e1');
						//Otra forma de ponerlo:
						//	$('#e1').after($('ol li:first'));

						//Metodo isertar antes de...
						//	$('ol li:first').insertBefore('#e1');
						//Otra forma de ponerlo:
						//	$('#e1').before($('ol li:first'));

						//Crear un clon 
						//	var clon = $('ol li:first').clone();
						//	clon.insertBefore('#e1');
						//Otra forma de ponerlo: 
						//	$('#e1').before(clon);

						//Insertar texto antes (Before) o despues (After) de la etiqueta
						//	var texto = $('<p>Hola Mundo!!</p>');
						//	texto.insertBefore('#e1');
						//Otra forma de ponerlo: 
						//	$('#e1').before(texto);
						//si quieres hacerlo dentro de la etiqueta especifica:
						//	texto.appendTo('#e1');
						//	$('#e1').append(texto);

						//Borrar elemento
						//	$('ol li:last').remove();
				//	})

//----------------------------------------------------------------------------------------------------------//
			//CASO 7

				//debe ser el inmediato siguiente 
				//	console.log($('#primero').next().text());

				//Comprobacion de etiqueta
				//	console.log($('#test').parent().attr('id'));

				//Seleccion de hijo
				//	console.log($('#padre').children().attr('id'));

				//Seleccion de hermanos todos los 'li' TODO JUNTO
				//	console.log($('#primero').siblings());

				//Seleccion de hermanos todos los 'li' con un foreach!!
				//elemento= a lo que contiene
				//index= el numero!!
				// console.log($("ul li").each(function(index,elemento){
				// 	console.log("Este elemento numero " + index + " contiene este texto: " + $(elemento).text());
				// }))



			});
		</script>
	</head>
	<body>
		
	</body>
</html>		
<!--CASO 1
		<div class="miDiv cl1">
			<p></p>			
		</div>
		<div class="miDiv">
			<span></span>		
		</div>
-->
<!--CASO 2
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul> 
-->
<!--CASO 3
		<p id="parrafo"><strong>Hola JQuery</strong></p>
		<div id="prueba"> </div>
-->
<!--CASO 4 
		<div id="test">Click on me</div>
-->	
<!--CASO 5 
		<a href="http://www.codigofacilito.com" >Enlace</a>
-->	
<!--CASO 6 
		<header>
			<img src="include/logo.png" alt="GC">
		</header>
		<ol>
			<li>Elemento 0</li>
			<li>Elemento 1</li>
			<li>Elemento 2</li>
			<li>Elemento 3</li>
		</ol>

		<button id="test">Ejecutar</button>

		<div id="e1">
			<p>Div 1</p>
		</div>

		<div id="e2">
			<p>Div 2</p>
		</div>
-->	
<!--CASO 7 
		<div>
			<article id="padre">
				soy el padre
				<div id="test">soy el hijo</div>
			</article>
		</div>
		<ul>
			<li id="primero">soy el primero</li>
			<li>soy el segundo</li>
			<li>soy el tercero</li>
		</ul>
-->	
<!--CASO 8 
		
-->	

	


