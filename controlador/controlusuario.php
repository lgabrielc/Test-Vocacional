<?php
class controlUsuario
{
	public function verificarUsuario($user,$password)
	{
		include_once("../modelo/usuario.php");
		$objUsuario = new Usuario;
		$respuesta = $objUsuario -> validarUsuario($user,$password);
        while ($fila = mysqli_fetch_array($respuesta)){
       	session_start();
        $_SESSION["idusuario"] = $fila['idusuario'];
        $_SESSION["codigo"] = $fila['codigo'];
		$codigo=$_SESSION["codigo"];
		$_SESSION["nombre"] = $fila['nombre'];
        $_SESSION["apellido"] = $fila['apellido'];
        $_SESSION["usuario"] = $fila['usuario'];
        $_SESSION["password"] = $fila['password'];
        $_SESSION["rol"] = $fila['rol'];
      }		
		$verificar=$respuesta -> num_rows;
		if ($verificar=='0')
		{
			include_once("../mensaje.php");
			$objMensaje = new Mensaje;
			$objMensaje -> MostrarMensaje("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema","<a href='../index.php'>ir al inicio</a>");
		}		
		else
		{
					if ($_SESSION["rol"] == 'admin') {
						error_reporting(0);
						include_once("../vistas/resultadosadmin.php");
					}
					else{
						require_once("../controlador/conexion.php");
						$conexion = new Conexion();
						$consulta="SELECT * FROM estudiantes WHERE codigo='$codigo' ";
						$resultado = $conexion->consultar($consulta);
						$filares = mysqli_fetch_array($resultado);
						if (is_array($filares)) {
							include("../vistas/mensaje.php");
						}else{
							include("../vistas/testvocacional.php");
						}
						
					}
				?>

			<?php
		//	$objDatos = new detalleUsuario;		
	//		$datos = $objDatos->obtenerDatos($user);
		}
	}
}
?>