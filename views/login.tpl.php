<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo base_url(); ?>">
	<meta charset="utf-8"/>
    <link rel="stylesheet"  href="assets/normalize.css"/>
    <link rel="stylesheet"  href="assets/login.css"/>
	
	<title> Caimanera</title>
</head>
<body>
<body>

        <div class="container">
             <form class="loginForm" action="user/login" method="POST" role="form">
                <h2 class="iniciiarSesion">Iniciar sesión</h2>
                <input type="text" name="username" class="textBox" placeholder="Usuario" required="" autofocus="">
                <input type="password" name="password" class="textBox" placeholder="Contraseña" required="">
                <button class="boton" type="submit">Iniciar</button>
                
            </form>
        </div> 
        <div id="errorSesion"> <?= $errorSesion ?> </div>
    


</body>
</html>