<!DOCTYPE html> 

<html lang = "es" >

<head>
	<base href="<?php base_url();?>"/>
	<meta charset="utf-8"/>
	<title>Jugadores</title>
	
</head>
<body>
<!--El BODY contiene la parte de contenido css...-->
	<header>
			
			<h1>LNFPV</h1>
			
	</header>

		

	<section id="contenido">
		<article class="item">
			<!--<?php if($userData['privilegio'] == 3): ?>
				<h2 class="nombre">
					<a href="#"><?= $entrenador->getNombre(); ?></a>
				</h2>
			<?php endif; ?>-->

			<div class="datos_item">
				 <a href="#" class= "edad"><?= $entrenador->getEdad(); ?></a>
			
			</div>

			<div class="datos_item">
				 <a href="#" class= "edad"><?= $array["0"] ?></a>
			
			</div>
	

		</article>
	

	</section>



		<ul>
			<?php $array=$entrenador->getJugadoresUsernames(); ?>
			<?php foreach($array as $key => $value): ?>
				<li><a class="usuario" href="#"><?php echo $value; ?></a></li>
			<?php endforeach; ?>
		</ul>

	
		<form action="">
			<input type="text" name="username" class="form-control" placeholder=">Nombre" required="" autofocus="">
                <input type="text" name="password" class="form-control" placeholder="edad" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Editar</button>

		</form>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
		$(function(){
			$('.usuario').click(function(){
				var username = $(this).html();
				alert(username);
				$.post('http://proyweb2/controllers/getJugadorController.php', {username:username}, function(data, status){
					console.log(data);
				});
				return false;
			});
		});
	</script>
	

</body>  

</html>  