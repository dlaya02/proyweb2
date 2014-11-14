<?php 


class  Entrenador { 

	protected $userName;
	protected $nombre;
	protected $apodo;
	protected $edad;
	protected $nacionalidad;
	protected $bio;
	protected $equipo;
	protected $clubNombre;
	protected $titulos;
    protected $jugadoresNombres = array();
    protected $jugadoresUsernames = array();




	public function __construct($Usuario_username, $Nombre,$Apodo,$Edad,
                                $Nacionalidad,$Bio,$Equipos,$Club_Nombre,$Titulos_e)
	{
            $this->userName     =$Usuario_username;
            $this->nombre       =$Nombre;
            $this->apodo        =$Apodo;
            $this->edad         =$Edad;
            $this->nacionalidad =$Nacionalidad;
            $this->bio          =$Bio;
            $this->equipo       =$Equipos;
            $this->clubNombre   =$Club_Nombre;
            $this->titulos      =$Titulos_e;
			
	}



	public function getUserName()
    {
        return $this->userName;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApodo()
    {
        return $this->apodo;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    public function getBio()
    {
        return $this->bio;
    }
    public function getEquipo()
    {
        return $this->equipo;
    }
        public function getClubNombre()
    {
        return $this->clubNombre;
    }
    public function getTitulos()
    {
        return $this->titulos;
    }

     public function getJugadoresNombre()
    {
         return $this->jugadoresNombres;
    }
    public function getJugadoresUsernames()
    {
         return $this->jugadoresUsernames;
    }




    public function setUserName($var)
    {
         $this->userName=$var;
    }
    public function setNombre($var)
    {
         $this->nombre=$var;
    }
    public function setApodo($var)
    {
         $this->apodo=$var;
    }
    public function setEdad($var)
    {
         $this->edad=$var;
    }
    public function setNacionalidad($var)
    {
         $this->nacionalidad=$var;
    }
    public function setBio($var)
    {
         $this->bio=$var;
    }
    public function setEquipo($var)
    {
         $this->equipo=$var;
    }
    public function setClubNombre($var)
    {
         $this->clubNombre=$var;
    }
    public function setTitulos($var)
    {
         $this->titulos=$var;
    }
    

    public function setJugadoresNombre($var)
    {
         $this->jugadoresNombres=$var;
    }
    public function setJugadoresUsernames($var)
    {
         $this->jugadoresUsernames=$var;
    }







}