<?php 


class  Jugador { 

	protected $userName;
	protected $nombre;
	protected $apodo;
	protected $edad;
	protected $nacionalidad;
	protected $bio;
	protected $equipo;
	protected $clubNombre;
	protected $titulos;
	
	protected $MinJug;
	protected $goles;
	protected $tarjetasRojas;
	protected $tarjetasAmarillas;
	protected $valoracion;
	protected $EntrenadorNombre;
	protected $EntrenadorUserName;





	


	public function __construct($jugador, $Nombre,$Apodo,$Edad,
                                $Nacionalidad,$Bio,$Equipos,$Club_Nombre,    
                                $Titulos_j,$Cant_goles,$TA,
                                $TR,$MinJug,$Valoracion,
                                $entrenador_Nombre,$entrenador_Usuario_username,
                                $club_Nombre_c)
	{
            $this->userName     		=$Usuario_username;
            $this->nombre       		=$Nombre;
            $this->apodo        		=$Apodo;
            $this->edad         		=$Edad;
            $this->nacionalidad 		=$Nacionalidad;
            $this->bio          		=$Bio;
            $this->equipo       		=$Equipos;
            $this->clubNombre   		=$Club_Nombre;
            $this->titulos      		=$Titulos;
		    $this->$goles 				=$Cant_goles;
			$this->$tarjetasRojas 		=$TR;
			$this->$tarjetasAmarillas 	=$TA;
			$this->$valoracion 			=$Valoracion;
			$this->$EntrenadorNombre 	=$entrenador_Nombre;
			$this->$EntrenadorUserName 	=$entrenador_Usuario_username;
			$this->$MinJug 				=$MinJug;
			
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
	public function getMinJug()
    {
        return $this->$MinJug;
    } 
    public function getTarjerasRojas()
    {
        return $this->$tarjetasRojas;
    }
     public function getTarjetasAmarillas()
    {
        return $this->$tarjetasAmarillas;
    }
     public function getValoracion()
    {
        return $this->$valoracion;
    }
     public function getEntrenadorNombre()
    {
        return $this->$EntrenadorNombre;
    }
         public function getEntrenadorUserName()
    {
        return $this->$EntrenadorUserName;
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
    

    public function setMinJug($var)
    {
        $this->$MinJug=$var;
    } 
    public function setTarjerasRojas($var)
    {
        $this->$tarjetasRojas=$var;
    }
     public function setTarjetasAmarillas($var)
    {
        $this->$tarjetasAmarillas=$var;
    }
     public function setValoracion($var)
    {
        $this->$valoracion=$var;
    }
     public function setEntrenadorNombre($var)
    {
        $this->$EntrenadorNombre=$var;
    }
         public function setEntrenadorUserName($var)
    {
       $this->$EntrenadorUserName=$var;
    }






}