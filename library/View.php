<?php 


class View extends Response 
{

	protected $template;
    protected $vars = array();


    public function __construct($template, $vars = array())
    {
        $this->template = $template;
        $this->vars = $vars;
    }


    public function getTemplate()
    {
        return $this->template;
    }
 
    public function getVars()
    {
        return $this->vars;
    }


    public function execute()
    {
    	$template = $this->getTemplate();
        $vars = $this->getVars();

        //encapsulamos para que ninguna variable que no sean del arreglo $vars se puedan accedes 
        //en nuestra vista 
        call_user_func(function () use ($template, $vars) 
        {
            extract($vars);
            echo $template;
            require "views/$template.tpl.php";
        });


    }
}
