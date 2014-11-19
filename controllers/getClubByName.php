<?php 

		$username = $_POST['username'];

        //echo("aqui el puto nombre_2: ".$nombre);

		$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta = "SELECT * FROM club WHERE Nombre_c = '".$username."'";
       // $consulta = "SELECT * FROM club WHERE Nombre_c='PoligonoAbierto'";

        $resultado = mysqli_query($enlace,$consulta);
        $sql = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


    	$data = array(
            "Historia" 	=>$sql["Historia"],
            "Fundacion" =>$sql["Fundacion"],
            "Estadio"   =>$sql["Estadio"],
            "PJ"        =>$sql["PJ"],
            "PG" 		=>$sql["PG"],
            "PE"        =>$sql["PE"],
            "PP"       	=>$sql["PP"],
            "Puntos"   	=>$sql["Puntos"],
            "GF"      	=>$sql["GF"],
    		"GC"		=>$sql["GC"],
    		"Titulos_C"	=>$sql["Titulos_C"]
    	);
    	 

    	header('Content-Type: application/json');
    	echo json_encode($data);


 ?>