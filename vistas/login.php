<?php 
session_start();
//VERIFICAMOS SI LA SESION YA HA SIDO INICIADA
class Login
{
	public function ValidarLogin()
	{
    ?>
	<html lang="es">
	<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="stylesheet" type="text/css" href="css/css.css">
    	<title>TEST VOCACIONAL</title>
	</head>
	<body>
	<form name="form1" class="login-form" action="controlador/getusuario.php" method="POST">
	  <img style="color: white"src="imagenes/Sin título-2.png" width="200" >
	  <div>
		  <div class="Titulo">TEST VOCACIONAL</div>
	  </div>
	  <input style="margin-top: 7px;" type="user" name="txt_user" class="login-username" autofocus="true" required="true" placeholder="Codigo" /> <!--Ingresamos el Usuario -->
	  <input type="password" name="txt_pass" class="login-password" required="true" placeholder="Password" /><!--Ingresamos la Password -->
	  <input type="submit" id="btn_login" name="btn_login" class="login-submit" />    
	</form>
	<div class="underlay-photo"></div>
	<div class="underlay-black"></div>
	</body>
	</html>
	<?php
	}
}
?>

