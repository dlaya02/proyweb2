<!DOCTYPE html> 

<html lang = "es" >

<head>

	<meta charset="utf-8"/>
	<title>Jugadores</title>
	<link rel="stylesheet"  href="assets/normalize.css"/>
    <link rel="stylesheet"  href="http://proyweb2/assets/entrenador.css"/>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic' rel='stylesheet' type='text/css'>
	
</head>
<body>


	<header>
			
			<h1><?= $entrenador->getNombre(); ?>/<?= $entrenador->getApodo(); ?></h1>
			
	</header>

		

	<section id="contenido">
		
			<div id="contenidoNombre">
			
				<img class="imagen"src="http://proyweb2/assets/entrenador.jpg" />
				<h2 class="nombre">
				
				</h2>
				
			</div>

			<div id="contenifoInformacion">

				
				<p class="infotexto"><strong>Biografia </strong>/ <?= $entrenador->getBio(); ?></p>
				<p class="infotexto"><strong>Edad </strong>/ <?= $entrenador->getEdad(); ?></p>
				<p class="infotexto"><strong>Nacionalidad </strong>/ <?= $entrenador->getNacionalidad(); ?></p>
				<p class="infotexto"><strong>Titulos / </strong><?= $entrenador->getTitulos(); ?></p>
				<p class="infotexto"><strong>Equipos / </strong><?= $entrenador->getEquipo(); ?></p>
				<p class="infotexto"><strong>Clubes / </strong><?= $entrenador->getClubNombre(); ?></p>

			</div>

			<div id="contenidoEditar"><a href="#">Editita Tu Informacion personal</a></div>

		</section>

		<section id="editar">
			<form action="">
			<input type="text1" name="Bio" class="form-control" placeholder="bio" required="">
			<input type="text1" name="Edad" class="form-control" placeholder="edad" required="">
			<input type="text1" name="Nacionalidad" class="form-control" placeholder="Nacionalidad" required="">
			<input type="text1" name="Titulos" class="form-control" placeholder="Titulos" required="">
			<input type="text1" name="Titulos" class="form-control" placeholder="Titulos" required="">
			<input type="text1" name="Club_Nombre" class="form-control" placeholder="Club" required="">
			<button class="" id="" type="submit">Editar</button>
			</form >
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

		</div id="formulario2">
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


