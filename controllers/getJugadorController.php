<?php 

$username = $_POST['username'];


		$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta= "SELECT * FROM jugador where Usuario_username ='".$username."'" ;
        $resultado = mysqli_query($enlace,$consulta);
          $sql = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


    	$data = array(
    		"Usuario_username" 		=> $username,
    		'Valoracion' 	=> $sql["Valoracion"],
    		'Cant_goles' 	=> $sql["Cant_goles"],
    		"TR"			=> $sql["TR"],
    		"TA"			=> $sql["TA"]
    	);

    	header('Content-Type: application/json');
    	echo json_encode($data);


 ?>