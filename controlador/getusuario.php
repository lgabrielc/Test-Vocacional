<?php
    if (isset($_POST['btn_login'])) {
		$user = trim($_POST['txt_user']);
		$pass = trim($_POST['txt_pass']);
		if (strlen($user)>=4 and strlen($pass)>=4 ) 
		{
			include_once("controlUsuario.php");
			$objUsuario=new controlUsuario;
			$objUsuario->verificarUsuario($user,$pass);
		}
		else
		{	
			include_once("../mensaje.php");
			$msg=new Mensaje;
			$msg->MostrarMensaje("Error, los datos enviados no son correctos…. Vuelva a intentar","<a href='../index.php'>ir al inicio</a>");
		}	
	}else{
		include_once("../mensaje.php");
		$objMensaje = new Mensaje;
		$objMensaje->MostrarMensaje("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema", "<a href='../index.php'>ir al inicio</a>");
	}	
?>
