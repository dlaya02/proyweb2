<?php 


class HomeController {

    public function defaultAction()
    {

    	$jugadores = array();
    	$i =0;

		$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');	
		
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}

		$consulta= "SELECT * FROM jugador " ;
		$resultado = mysqli_query($enlace,$consulta);

		while( $sql = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
       	{
       			$jugador = new jugador($sql["Usuario_username"], $sql["Nombre"],$sql["Apodo"],$sql["Edad"],
                                $sql["Nacionalidad"],$sql["Bio"],$sql["Equipos"],    
                                $sql["Titulos_j"],$sql["Cant_goles"],$sql["TA"],
                                $sql["TR"],$sql["MinJug"],$sql["Valoracion"],
                                $sql["entrenador_Nombre"],$sql["entrenador_Usuario_usernamer"],
                                $sql["club_Nombre_c"]);
       			$jugadores[$i]=$jugador;

       			$i=$i+1;
       	}


		die("<pre>".print_r($jugadores, true)."</pre>");


       // return new View('home', ['array' => $jugadores]);
    }

}