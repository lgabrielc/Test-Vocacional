<?php
		session_start();

		if (isset($_SESSION['codigo'])) {
			include("../vistas/testvocacional.php");
		}
		else{
			
			include_once("../mensaje.php");
			$objMensaje = new Mensaje;
			$objMensaje -> MostrarMensaje("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema","<a href='../index.php'>ir al inicio</a>");
		}
?>