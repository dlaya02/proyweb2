<!DOCTYPE html> 

<html lang = "es" >

<head>
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
				
			<h2 class="nombre">
				<a href="#"><?= $entrenador->getNombre(); ?></a>
			</h2>
			

			<div class="datos_item">
				 <a href="#" class= "edad"><?= $entrenador->getEdad(); ?></a>
			
			</div>

			<div class="datos_item">
				 <a href="#" class= "edad"><?= $array["0"] ?></a>
			
			</div>
	

		</article>
	

	</section>


		<ul>

		<?=  		$array= array();
			$array=$entrenador->getJugadoresUsernames();

				foreach ($array as $valor)
				{
					
					echo "<li>".$valor."</li>";
				}
			?>
				
				
				
				
		</ul>

	
	

</body>  

</html>  