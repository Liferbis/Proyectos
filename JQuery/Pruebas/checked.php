<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			$('#miInput').on("cambio", function(ev, id){
				console.log(id);
				if(this.checked){
					$('#miInput').removeAttr('checked');
					$('.cambiar').text('Encender');
				}else{
					$('#miInput').attr('checked','checked');
					$('.cambiar').text('Apagar');
				}
			});
			$('.cambiar').on('click',function(){
				$('#miInput').trigger('cambio',[$(this).attr('id')]);
			})
		});		
	</script>
	
</head>
<body>
	<input type="checkbox" id="miInput" checked='checked'>
	<button id="b1" class='cambiar'>Apagar</button>
	<button id="b2" class='cambiar'>Apagar</button>
</body>
</html>