<?php 

	require 'confi.php';

	//Librerias a utilizar
	require 'library/Request.php';
	require 'library/Inflector.php';
	require 'library/Response.php';
	require 'library/View.php';
	require 'library/Entrenador.php';

	if(empty($_GET['url']))
	{
		$url = '';
	}  	
	else
	{
		$url = $_GET['url'];
	}

	$request = new Request ($url);
	$request->execute();
