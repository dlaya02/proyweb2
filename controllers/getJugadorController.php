<?php 

$username = $_POST['username'];

    	$data = array(
    		"usuario" 		=> $username,
    		'password' 		=> '123',
    		'privilegio' 	=> 3
    	);

    	header('Content-Type: application/json');
    	echo json_encode($data);


 ?>