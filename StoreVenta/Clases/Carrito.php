<?php 

class Carrito
{
	public	function AgregarCarrito($datos)
	{		
		$c= new Conectar();
		$conexion=$c->conexion();
		$result = mysqli_query($conexion,"SELECT COUNT(*) AS `count` FROM `carrito` where codigoproducto='$datos[1]' ");
		$row = mysqli_fetch_assoc($result);
		$count = $row['count'];
		if ($count==0) {
			$sql="INSERT INTO carrito (idcliente,codigoproducto,cantidad,precio,img)
				values('$datos[0]',
						'$datos[1]',
						'$datos[2]',
						'$datos[3]',
						'$datos[4]')";		
	  		  return mysqli_query($conexion,$sql);																
		}else{
			$sql="SELECT  *  from carrito    where codigoproducto= '$datos[1]'";       
			$result=mysqli_query($conexion,$sql);
			$fila = mysqli_fetch_row($result);
			$cantidad = $fila[2];
			$total =$cantidad+$datos[2];
			$sql = "UPDATE carrito SET cantidad ='$total' WHERE codigoproducto='$datos[1]'";
			return mysqli_query($conexion,$sql);	
		}		
	}

	public function DelteItem($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();	
			$sql="DELETE from carrito 	where codigoproducto='$datos'";
			return mysqli_query($conexion,$sql);	
	}

	public function DelteItemAll()
	{
			$c=new Conectar();
			$conexion=$c->conexion();	
			$sql="DELETE from carrito";
			return mysqli_query($conexion,$sql);	
	}
}
 ?>