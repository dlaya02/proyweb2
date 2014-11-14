<?php 

	require 'confi.php';

	//Librerias a utilizar
	require 'library/Request.php';
	require 'library/Inflector.php';
	require 'library/Response.php';
	require 'library/View.php';
	require 'library/Entrenador.php';
	require 'library/Jugador.php';
	require 'library/Database.php';
	require 'helpers/misc_helper.php';

	

	if(empty($_GET['url']))
	{
		$url = '';
	}  	
	else
	{
		$url = $_GET['url'];
	}
	pre($url);
	$request = new Request ($url);
	$request->execute();
