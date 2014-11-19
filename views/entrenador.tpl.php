<!DOCTYPE html> 

<html lang = "es" >

<head>

	<meta charset="utf-8"/>
	<title>Jugadores</title>
	
    <link rel="stylesheet"  href="http://proyweb2/assets/entrenador.css"/>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic' rel='stylesheet' type='text/css'>
	
</head>
<body>


	<header>
			
			<h1><?= $entrenador->getNombre(); ?></h1>
			<h2>/<?= $entrenador->getApodo(); ?></h2>
			
	</header>

		

	<section id="contenido">
		
			<div id="contenidoNombre">
				<img class="imagen"src="http://proyweb2/assets/entrenador.jpg" />
			</div>
			<div id="contenifoInformacion">
				<p class="infotexto"><strong>Biografia </strong>/ <?= $entrenador->getBio(); ?></p>
				<p class="infotexto"><strong>Edad </strong>/ <?= $entrenador->getEdad(); ?></p>
				<p class="infotexto"><strong>Nacionalidad </strong>/ <?= $entrenador->getNacionalidad(); ?></p>
				<p class="infotexto"><strong>Titulos / </strong><?= $entrenador->getTitulos(); ?></p>
				<p class="infotexto"><strong>Equipos / </strong><?= $entrenador->getEquipo(); ?></p>
				<p class="infotexto"><strong>Clubes / </strong><?= $entrenador->getClubNombre(); ?></p>
			</div>
		<div id="getDatosEntrenador"><a href="#">Editita Tu Informacion personal</a></div>
	</section>

	






	<section id="editarEntrenadorCaja">
			<form id="formulario1"action="getdatos...">
				<p>Apodo</p>
				<input type="text" id="Apodo" name="Apodo" placeholder="Apodo" required="">
				<br>
				<p>Biografia</p>
				<input type="text" id="Bio"  name="Bio" placeholder="bio" required="">
				<p>Edad</p>
				<input type="text" id="Edad" name="Edad" placeholder="edad" required="">
				<br>
				<p>Nacionalidad</p>	
				<input type="text" id="Nacionalidad" name="Nacionalidad" placeholder="Nacionalidad" required="">
				<p>Titulos</p>
				<input type="text" id="Titulos" name="Titulos" placeholder="Titulos" required="">
				<br>
				<p>Equipo</p>
				<input type="text" id="Equipo" name="Equipo" placeholder="Equipo" required="">
				<a id="editarEntrenador" href="#" >Editar</a>
			</form >
		</section>



		<section id="editarClub">

			<div id="getDatosClub"><a href="#">Editita rendimiento del Club</a></div>
			<h3 id="ClubName" style="display:none" ><?= $entrenador->getClubNombre();?></h3>

			<form id="formularioClub"action="fromcñum...">
				<p>Historia</p>
				<input type="text1" id="Historia" name="Historia" class="form-control" placeholder="Historia" required="">
				<br>
				<p>Fundacion</p>
				<input type="text1" id="Fundacion"  name="Fundacion" class="form-control" placeholder="Fundacion" required="">
				<p>Partidos Jugados</p>
				<input type="text1" id="PJ" name="PJ" class="form-control" placeholder="Partidos Jugados" required="">
				<br>
				<p>Partidos Ganados</p>	
				<input type="text1" id="PG" name="PG" class="form-control" placeholder="Partidos Ganados" required="">
				<br>
				<p>Partidos Empatados</p>
				<input type="text1" id="PE" name="PE" class="form-control" placeholder="Partidos Empatados" required="">
				<p>Partidos Perdidos</p>
				<input type="text1" id="PP" name="PP" class="form-control" placeholder="Partidos Perdidos" required="">
				<p>Puntos</p>
				<input type="text1" id="Puntos" name="Puntos" class="form-control" placeholder="Puntos" required="">
				<p>Goles a Favor</p>
				<input type="text1" id="GF" name="GF" class="form-control" placeholder="Goles a Favor" required="">
				<p>Goles en Contra</p>
				<input type="text1" id="GC" name="GC" class="form-control" placeholder="Goles en Contra" required="">
				<p>Titulos</p>
				<input type="text1" id="Titulos_c" name="Titulos_c" class="form-control" placeholder="Titulos_c" required="">
			</form >
					<a id="editarClubBoton" href="#" >Editar</a>
	
		</section>

		


		<section id="editarJugadores">
					<div id="listas">
						<ul > Seleccione Jugador 
							<?php $array=$entrenador->getJugadoresUsernames(); ?>
							<?php foreach($array as $key => $value): ?>
								<li><a class="usuario" href="#"><?php echo $value; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>

				<div id="formulario2">
					<form id="editarJugadorF" action="http://proyweb2/controllers/setJugador.php" method="POST" target="_parent">
							<p>Valoracion</p>
							<input type="text" id="Valoracion" name="Valoracion" class="cajaTexto2" placeholder="Valoracion" required="" a>
			                <p>Cantidad de Goles</p>
			                <input type="text" id="Cant_goles"name="Cant_goles" class="cajaTexto2" placeholder="Cantidad de Goles" required="">
			                <p>Cantidad de Tarjetas Rojas</p>
			                <input type="text" id="TR"name="TR" class="cajaTexto2" placeholder="Cantidad Tarjetas Rojas" required="" a>
			                <p>Cantidad de Tarjetas Amarillas</p>
			                <input type="text" id="TA"name="TA" class="cajaTexto2" placeholder="Cantidad Tarjetas Amarillas" required="" a>
			                <input type="hidden" id="Usuario_username" name="Usuario_username" value="valor"> 
						<a id="editarJugador" href="#" >Editar</a>
					</form>
				</div>

		</section>

		

		<a id="cerrar" href='http://proyweb2/user/logout'>Cerrar sesion</a>

	<script src="http://proyweb2/assets/jquery.js"></script>
	<script src="http://proyweb2/assets/entrenador.js"></script>
	

</body>  
		<!--<?php if($userData['privilegio'] == 3): ?>
				<h2 class="nombre">
					<a href="#"><?= $entrenador->getNombre(); ?></a>
				</h2>
			<?php endif; ?>-->
</html>  


