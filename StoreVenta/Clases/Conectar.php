<?php 

class Conectar 
{

	private $servidor="localhost";
	private $usuario="root";
	private $pass="";
	private $bd="storejt";
	
	function conexion()
	{
		$conexion=mysqli_connect($this->servidor,
						$this->usuario,
						$this->pass,
						$this->bd);
		return $conexion;
	}
}



 ?>