<?php 

class BackendController {

    public function defaultAction()
    {
    	session_start();

    	//si existe la secion
    	if (isset($_SESSION['username']))
		{
				echo"session_ ".$_SESSION['username'];
				$_SESSION["privilegio"]
				echo "<a href='user/logout'>Cerrar sesion</a>";

		}else
		{
			return new View('login', ['errorSesion' => '']);
		}
    }	

}