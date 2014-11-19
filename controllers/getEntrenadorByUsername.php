<?php 

$username = $_POST['username'];


		$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		//$consulta = "SELECT * FROM `entrenador` WHERE `Usuario_usernamer`='$Usuario_usernamer'";
		//$consulta= "SELECT * FROM jugador where Usuario_username ='".$username."'" ;
        $consulta = "SELECT * FROM entrenador WHERE Nombre='".$username."'";

        $resultado = mysqli_query($enlace,$consulta);
        $sql = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


    	$data = array(
            "Usuario_username" 	=>$sql["Usuario_usernamer"],
            "Nombre"       		=>$sql["Nombre"],
            "Apodo"        		=>$sql["Apodo"],
            "Edad"         		=>$sql["Edad"],
            "Nacionalidad" 		=>$sql["Nacionalidad"],
            "Bio"          		=>$sql["Bio"],
            "Equipos"       	=>$sql["Equipos"],
            "Club_Nombre"   	=>$sql["Club_Nombre"],
            "Titulos_e"      	=>$sql["Titulos_e"]
    	);
    	 

    	header('Content-Type: application/json');
    	echo json_encode($data);


 ?>