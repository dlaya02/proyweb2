<?php 
	$Nombre 		= $_POST['Nombre'];
	$Edad 			= $_POST['Edad'];
	$Titulos_e 		= $_POST['Titulos_e'];
	$Bio 			= $_POST['Bio'];
	$Equipos 		= $_POST['Equipos'];
	$Apodo 			= $_POST['Apodo'];
	$Nacionalidad 	=$_POST['Nacionalidad'];
	//$Club_Nombre 	=$_post['Club_Nombre'];


	$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta = "UPDATE entrenador SET  Edad = '".$Edad."', Titulos_e = '".$Titulos_e."', Bio = '".$Bio."', Equipos = '".$Equipos."',  Apodo = '".$Apodo."',  Nacionalidad = '".$Nacionalidad."' WHERE Nombre = '".$Nombre."'";
		//$consulta= "UPDATE jugador SET  Cant_goles = '".$Cant_goles."', TA = '".$TA."', TR = '".$TR."', Valoracion = '".$Valoracion."' where Usuario_username ='".$Usuario_username."'";
        $resultado = mysqli_query($enlace,$consulta);
       
        

 ?>