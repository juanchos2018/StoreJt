<?php 
/**
 * 
 */
class Categoria 
{
	
public	function ListrCategoria($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO categoria (descrip)
		values('$datos[0]')";

	   return mysqli_query($conexion,$sql);
			
	}

	






	

	

	
}
 ?>