<?php 


class LoginController {





    public function defaultAction()
    {

		return new View('login', ['errorSesion' => '']);

    }

    //Funcion que retorna la vista para el inicio de secion
    public function inicioAction()
    {
		//echo "usuario: ".$_POST["username"]."  Contraseña: ".$_POST["password"];

        $usuario = $_POST["username"];
        $clave = $_POST["password"];

       
		

		$consulta= "SELECT privilegio FROM usuario where username ='".$usuario."' AND password = ".$clave ;
        $resultado = mysqli_query($enlace,$consulta);
 	

 		
 	
 		
 		if (!$resultado) {
   		//	 $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
   		//	 $mensaje .= 'Consulta completa: ' . $consulta;
   			 return new View('login', ['errorSesion' => 'Error Nombre de Usuario o Contraseña invalido']);
   			// die($mensaje);
		}else{
		
			while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			
			{	
			
				if( $row["privilegio"] == 3)
				{
				
				return new View('jugador', ['nombre' => 'David','edad'=>'23','array'=>['0'=>'el futbol en el mundo']]);
				
				}elseif ( $row["privilegio"] == 2) {
			
				$persona = $this->consultarEntrenador($usuario,$enlace);
				return new View('entrenador', ['entrenador' => $persona,'array'=>['0'=>'el futbol en el mundo']]);
				

				}elseif ($row["privilegio"] == 1) {
					
				}
			}
		}
    }


	public function consultarEntrenador($entrenador,$enlace)
    {
    	$consulta= "SELECT * FROM entrenador where Usuario_usernamer ='".$entrenador."'" ;
        $resultado = mysqli_query($enlace,$consulta);
        $sql = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


		$jugadorUsername = array();
      
        $consulta2= "SELECT Usuario_username FROM jugador where entrenador_Usuario_usernamer ='".$entrenador."'" ;
        $resultado2 = mysqli_query($enlace,$consulta2);
        
       $i=0;
       while( $sql2 = mysqli_fetch_array($resultado2, MYSQLI_ASSOC))
       {
       		$jugadorUsername[$i]=$sql2["Usuario_username"];
			echo "<br/>".$jugadorUsername[$i];
       		$i=$i+1;


       }


         $salida =new Entrenador($entrenador, $sql["Nombre"],$sql["Apodo"],$sql["Edad"],
								$sql["Nacionalidad"],$sql["Bio"],$sql["Equipos"],$sql["Club_Nombre"],    
								$sql["Titulos"]);

         $salida->setJugadoresUsernames($jugadorUsername);

         return $salida;

    }

}

/*


$sql["Usuario_username"], $sql["Nombre"],$sql["Apodo"],$sql["Edad"],
$sql["Nacionalidad"],$sql["Bio"],$sql["Equipos"],$sql["Club_Nombre"],    
$sql["Titulos"]
			
	*/

