<?php 

		$Nombre_c 	= $_POST['Nombre_c'];
		$Historia	= $_POST['Historia'];
		$Fundacion	= $_POST['Fundacion'];
		$PJ			= $_POST['PJ'];
		$PG			= $_POST['PG'];
		$PE			= $_POST['PE'];
		$PP			= $_POST['PP'];
		$GF			= $_POST['GF'];
		$GC			= $_POST['GC'];
		$Titulos_C	= $_POST['Titulos_C'];
		$Puntos		= $_POST['Puntos'];
	

	//$Club_Nombre 	=$_post['Club_Nombre'];


	$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta = "UPDATE club SET  Historia ='".$Historia."', Fundacion ='".$Fundacion."', PJ='".$PJ."', PG = '".$PG."', PE = '".$PE."', PP = '".$PP."', GF = '".$GF."', GC = '".$GC."', Titulos_C = '".$Titulos_C."', Puntos = '".$Puntos."' WHERE Nombre_c = '".$Nombre_c."'";
		//$consulta= "UPDATE jugador SET  Cant_goles = '".$Cant_goles."', TA = '".$TA."', TR = '".$TR."', Valoracion = '".$Valoracion."' where Usuario_username ='".$Usuario_username."'";
        $resultado = mysqli_query($enlace,$consulta);
       
        

 ?>