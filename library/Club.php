<?php
	class Club
	{
		protected $nombre;
		protected $historia;
		protected $fundacion;
		protected $estadio;
		protected $pj;
		protected $pg;
		protected $pe;
		protected $pp;
		protected $puntos;
		protected $gf;
		protected $gc;
		protected $titulos_c;

		public function __construct($Nombre_c, $Historia, $Fundacion,$Estadio, $PJ, $PG, $PE, $PP, $Puntos,$GF, $GC, $Titulos_c)
		{
			$this->nombre_c = $Nombre_c;
			$this->historia = $Historia;
			$this->fundacion = $Fundacion;
			$this->estadio = $Estadio;
			$this->pj = $PJ;
			$this->pg = $PG;
			$this->pe = $PE;
			$this->pp = $PP;
			$this->puntos = $Puntos;
			$this->gf = $GF;
			$this->gc = $GC;
			$this->titulos_c = $Titulos_c;

		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getHistoria(){
			return $this->historia;
		}

		public function getFundacion(){
			return $this->fundacion;
		}

		public function getEstadio(){
			return $this->estadio;
		}

		public function getPj(){
			return $this->pj;
		}

		public function getPg(){
			return $this->pg;
		}

		public function getPe(){
			return $this->pe;
		}

		public function getPp(){
			return $this->pp;
		}

		public function getPuntos(){
			return $this->puntos;
		}

		public function getGf(){
			return $this->gf;
		}

		public function getGc(){
			return $this->gc;
		}
		public function getTitulos(){
			return $this->titulos_c;
		}



		public function setNombre($Nombre_c)
		{
			$this->nombre_c=$Nombre_c;
		}

		public function setHistoria($Historia){
			$this->historia=$Historia;
		}

		public function setFundacion($Fundacion){
			$this->fundacion=$Fundacion;
		}

		public function setEstadio($Estadio){
			$this->estadio=$Estadio;
		}

		public function setPj($PJ){
			$this->pj=$PJ;
		}

		public function setPg($PG){
			$this->pg=$PG;
		}

		public function setPe($PE){
			$this->pe=$PE;
		}

		public function setPp($PP){
			$this->pp=$PP;
		}

		public function setPuntos($Puntos){
			$this->puntos=$Puntos;
		}

		public function setGf($GF){
			$this->gf=$GF;
		}

		public function setGc($GC){
			$this->gc=$GC;
		}

		public function setTitulos($Titulos_c){
			$this->titulos_c=$Titulos_c;
		}



	}


?>
