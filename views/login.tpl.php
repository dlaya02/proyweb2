<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo base_url(); ?>">
	<meta charset="utf-8"/>
	
	<title> Caimanera</title>
</head>
<body>
<body>

        <div class="container">
             <form class="loginForm" action="user/login" method="POST" role="form">
                <h2 class="">Iniciar sesión</h2>
                <input type="text" name="username" class="form-control" placeholder="Usuario" required="" autofocus="">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
                <div id="errorSesion"> <?= $errorSesion ?> </div>
            </form>
        </div> 
    


</body>
</html>