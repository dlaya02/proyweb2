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


$('#getDatosEntrenador').click(function(){
				
				
				/*var username = '<%= Session["username"] %>';
        		alert(username);
				
				return false;*/

				var username = $("h1").html();
				console.log(username);

				$.post('http://proyweb2/controllers/getEntrenadorByUsername.php', {username:username}, function(data, status){
				console.log("Data->");
				console.log(data);
					//$("#Nombre").val(data.Nombre);
					$("#Apodo").val(data.Apodo);
					$("#Bio").val(data.Bio);
					$("#Edad").val(data.Edad);
					$("#Nacionalidad").val(data.Nacionalidad);
					$("#Titulos").val(data.Titulos_e);	
					$("#Equipo").val(data.Equipos);
					//$("#Club_Nombre").val(data.Club_Nombre); 


					
				});
				return false;
			});



$('#editarEntrenador').click(function(){

	var Nombre          =	$("h1").html();
	var Apodo         	=	$("#Apodo").val();
	var Bio          	=	$("#Bio").val();
	var Edad          	=	$("#Edad").val();
	var Nacionalidad    =	$("#Nacionalidad").val();    
	var Titulos_e       =	$("#Titulos").val();	
	var Equipos         =	$("#Equipo").val();
//	var Club_Nombre     =	$("#Club_Nombre").val();   



	  $.post('http://proyweb2/controllers/setEntrenadorByName.php', {
						  	"Nombre":Nombre,
						  	"Apodo":Apodo,
						  	"Bio":Bio,
						  	"Edad":Edad,
						  	"Nacionalidad":Nacionalidad,
						  	"Titulos_e":Titulos_e,
						  	"Equipos":Equipos,
						  	//"Club_Nombre":Club_Nombre
			}, function(data, status){
				//console.log(data);	
				window.location.reload();  	
				});
				return false;

});






$('#getDatosClub').click(function()
{	
	var username = $("#ClubName").html();

		$.post('http://proyweb2/controllers/getClubByName.php', {username:username}, function(data, status){

			console.log(data);
			$("#Historia").val(data.Historia);
			$("#Fundacion").val(data.Fundacion);
			$("#PJ").val(data.PJ);
			$("#PG").val(data.PG);
			$("#PE").val(data.PE);
			$("#PP").val(data.PP);
			$("#Puntos").val(data.Puntos);
			$("#GF").val(data.GF);
			$("#GC").val(data.GC);
			$("#Titulos_c").val(data.Titulos_C);



		});

		return false;
	
});