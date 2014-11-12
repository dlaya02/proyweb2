<?php 


class LoginController {




    public function defaultAction()
    {
        echo "usuario: ".$_POST["username"]."  Contraseña: ".$_POST["password"];

        $usuario = $_POST["username"];
        $contraseña = $_POST["password"];

       // $enlace =  mysql_connect('localhost', 'david', '20315979');
        $enlace = mysqli_connect('localhost', 'david', '20315979', 'proyectoweb');
																	
		if  (!$enlace)  
		{
		    die('No pudo conectarse: ' . mysql_error());
		}
		echo 'Conectado satisfactoriamente  _____';



		$consulta= "SELECT * from user ";
        
        $resultado = mysqli_query($enlace,$consulta);
 		
 	
 		if (!$resultado) {
   			 $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
   			 $mensaje .= 'Consulta completa: ' . $consulta;
   			 die($mensaje);
		}else{
		
//***************************************************************
			//supuestamente en esta mierda.... es que se hecha tres...
			$fila = mysql_fetch_array($resultado);

			if(!$fila)
			{
				echo"se pudrio la mierda";
			}
		}
 		      
       
    }



}
