<?php


class UserController {

    public function defaultAction()
    {
		echo "Estoy en el controlador User";	      
    }

    public function loginAction()
    {
    	$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$consulta = "SELECT * FROM usuario where username ='".$username."' AND password = ".$password ;
        $resultado = mysqli_query($enlace,$consulta);
       
        if(!$resultado) 
        {
   			 return new View('login', ['errorSesion' => 'Error Nombre de Usuario o Contraseña invalido']);
		}
		else
		{
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			session_start();
			setcookie('misession','1',7200);
			$_SESSION['username'] = $row['username'];
			$_SESSION["privilegio"] = $row["privilegio"];
			if($row["privilegio"] == 3)
			{
				return new View('jugador', ['nombre' => 'David','edad'=>'23','array'=>['0'=>'el futbol en el mundo']]);
			}
			elseif($row["privilegio"] == 2) 
			{
				$persona = $this->consultarEntrenador($username,$enlace);
				return new View('entrenador', ['entrenador' => $persona,'array'=>['0'=>'el futbol en el mundo']]);
			}
			elseif($row["privilegio"] == 1)
			{
					
			}
		}
    	      
    }

    public function logoutAction()
    {
    	session_start();
    	session_destroy();
    	echo "Destrui la sesion";
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

    public function ajax_getDataUserAction()
    {
    	//$username = $_POST['username'];

    	$data = array(
    		"usuario" 		=> "username",
    		'password' 		=> '123',
    		'privilegio' 	=> 3
    	);
    	echo "entro aqui en ajax_getDataUserAction()";

    	header('Content-Type: application/json');
    	echo json_encode($data);
    }
}