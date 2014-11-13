<?php 

class Request
{
			protected $url;

			protected $controller;
			protected $defaultController = 'home';

			protected $action;
  			protected $defaultAction = 'default';

  			protected $params = array();
	

			public function __construct($url)
			{
				$this->url=$url;
			
				$segmentos = explode('/',$this->url);


				//extraes la primera posicion se segmentos, que corresponde al controlador
				$this->resolveController($segmentos);
				//extrae primera posicion de segmentos (segundo parametro url), corresponde
		    	// a la funcion del controlador
				$this->resolveAction($segmentos);
				// todo lo que queda seran parametros a procesar por la funcion de un controlador
				$this->resolveParams($segmentos);

			}




			//porcesara la url suministrada en el index  ($_get).
			public function resolveController(&$segmentos)
			{
				//extraes la primera posicion se segmentos(1mer parametro de la url), que corresponde al controlador
				$this->controller = array_shift($segmentos);
				if(empty($this->controller))
				{
					$this->controller = $this->defaultController;
				}

			}
			//porcesara la acccion de la url suministrada en el index  ($_get).
		    public function resolveAction(&$segmentos)
		    {

		    	//extrae primera posicion de segmentos (segundo parametro url), corresponde
		    	// a la funcion del controlador
		        $this->action = array_shift($segmentos);

		        if (empty($this->action))
		        {
		            $this->action = $this->defaultAction;
		        }
		    }



		    public function resolveParams(&$segmentos)
		    {	// todo lo que queda seran parametros a procesar por la funcion de un controlador
		        $this->params = $segmentos;
		    }




			public function getUrl()
			{
				return $this->url;
			}

			public function getAction()
			{
				return $this->action;
			}

			public function getController()
			{
				return $this->controller;
			}

			public function getParams()
		    {
		        return $this->params;
		    }

			public function getControllerClassName()
			{
				//compone el nombre del controlador
				 return Inflector::camel($this->getController()) . 'Controller';
			}
			
			public function getActionMethodName()
		    {
		    	//compone el nombre de la funcion del controlador que se ira a utilizar
		        return Inflector::lowerCamel($this->getAction()) . 'Action';
		    }

			public function getControllerFileName()
		    {
		    	//crea la ruta en la carpeta controller para buscar el controlador indicado
		        return 'controllers/' . $this->getControllerClassName() . '.php';
		    }






	public function execute()
    {	
    	//compone el nombre del controlador
        $controllerClassName = $this->getControllerClassName();
        //crea la ruta en la carpeta controller para buscar el controlador indicado
        $controllerFileName  = $this->getControllerFileName();
        //compone el nombre de la funcion del controlador que se ira a utilizar
        $actionMethodName    = $this->getActionMethodName();
        //se pasan los parametros a utilizar
        $params              = $this->getParams();

		//si no existe el archivo del controlador
         if ( ! file_exists($controllerFileName))
        {
            exit($controllerFileName.'->controlador no existe');
        }
        		
       

        //requiere el archivo del controlador ejem: HomeController.php
        require $controllerFileName;

        //crea una instancia del controlador (Acordar que estamos usando clases poo)
        $controller = new $controllerClassName();


        $response = call_user_func_array([$controller, $actionMethodName], $params);
     	

    	if ($response instanceof Response)
        {
            $response->execute();
        }


     	
     
    }



}








