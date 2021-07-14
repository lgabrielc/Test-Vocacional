<?php
require_once("../controlador/conexion.php");
class Usuario
{
	public function validarUsuario($user,$password)
	{	
		$conexion = new Conexion();
		$consulta="SELECT * FROM usuarios WHERE usuario='$user' AND password='$password' ";
		$resultado = $conexion->consultar($consulta);
		return $resultado;
	}




}
?>