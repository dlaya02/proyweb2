<?php 

function pre($data)
{
	echo "<pre>".print_r($data, true)."</pre>";
}

function die_pre($data)
{
	die("<pre>".print_r($data, true)."</pre>");
}


function base_url()
{
	return "http://proyweb2/";
}


function getDatabase()
{
	$enlace = mysqli_connect('localhost', 'david', '20315979', 'lnfpv');														
	if(!$enlace)  
	{
	    die('No pudo conectarse: ' . mysql_error());
	}

	return $enlace;
}


/*	<?php 
		if($talverga == ASJDASD)
		{

		}
		else
		{
			asodjaspd
		}

	?>
	<?php if(): ?>
	<?php elseif(): ?>
	<?php else: ?>
	<?php endif; ?>*/

	?>