$('.usuario').click(function(){
				var username = $(this).html();
				$.post('http://proyweb2/controllers/getJugadorController.php', {username:username}, function(data, status){
				

					$("#Valoracion").val(data.Valoracion);
					$("#Cant_goles").val(data.Cant_goles);
					$("#TR").val(data.TR);
					$("#TA").val(data.TA);
					$("#Usuario_username").val(data.Usuario_username);

					
				});
				return false;
			});



$('#editarJugador').click(function(){

	var Valoracion 		 =	$("#Valoracion").val();
	var Cant_goles		 =	$("#Cant_goles").val();
	var TR				 =	$("#TR").val();
	var TA				 =	$("#TA").val();
	var Usuario_username =  $("#Usuario_username").val();

	
	$.post('http://proyweb2/controllers/setJugador.php', {"Usuario_username":Usuario_username,"Valoracion":Valoracion,"Cant_goles":Cant_goles,"TR":TR,"TA":TA}, function(data, status){
				console.log(data);	
					
				});
				return false;
});
