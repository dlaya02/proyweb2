<?php 

class BackendController {

    public function defaultAction()
    {
    	session_start();

    	//si existe la secion
    	if (isset($_SESSION['username']))
		{

			if($_SESSION["privilegio"] == 2)
			{
				require 'controllers/UserController.php';
				$entrenador = new UserController();
				//$var = array ('username'=>$_SESSION['username'],'password'=>$_SESSION['password']);
				$_POST['username']=$_SESSION['username'];
    			$_POST['password']=$_SESSION['password'];

				$response = call_user_func_array([$entrenador, "loginAction"], $var = array());
				if ($response instanceof Response)
			    {
			        $response->execute();
			    }

			//	return new View('entrenador', ['entrenador' => $persona,'array'=>['0'=>'el futbol en el mundo']]);
			}
				/*echo"session_ ".$_SESSION['username'];
				echo " ".$_SESSION["privilegio"];
				echo "<a href='user/logout'>Cerrar sesion</a>";*/

		}else
		{
			return new View('login', ['errorSesion' => '']);
		}
    }	

}