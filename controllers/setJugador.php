<?php 
	$Cant_goles = $_POST['Cant_goles'];
	$TA = $_POST['TA'];
	$TR = $_POST['TR'];
	$Valoracion = $_POST['Valoracion'];
	$Usuario_username = $_POST['Usuario_username'];


	$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta= "UPDATE jugador SET  Cant_goles = '".$Cant_goles."', TA = '".$TA."', TR = '".$TR."', Valoracion = '".$Valoracion."' where Usuario_username ='".$Usuario_username."'";
        $resultado = mysqli_query($enlace,$consulta);
        

 ?>