<?php
class Conexion
{
	private $conexion;
	
	public function __construct () {
		$this->conexion = new mysqli("localhost","root","admin","testlg");
		$this->conexion->set_charset('utf8');
	}

	public function consultar ($sql) {
		$query = $this->conexion->query($sql);
		return $query;
	}
}
?>