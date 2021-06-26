<?php 

class Cliente
{
	public	function RegistrarCliente($datos)
	{		
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO cliente (Dni,Nombre,Apellidos,Celular,Correo,Password,Sexo,Estado)
		values('$datos[0]',
			'$datos[1]',
			'$datos[2]',
			'$datos[3]',
			'$datos[4]',
			'$datos[5]',
            '$datos[6]',
            '$datos[7]')";
			return mysqli_query($conexion,$sql);
	}

	public function LoginCliente($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();			
			$sql="SELECT * 	from cliente	where Correo='$datos[0]'	and Password='$datos[1]'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				$_SESSION['correo']=$datos[0];
				$_SESSION['IdCliente']=self::TraeCodigoCliente($datos[0]);
				return 1;
			}else{
				return 0;
			}
	}
	public function TraeCodigoCliente($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();		
			$sql="SELECT IdCliente,Nombre
					from cliente
					where Correo='$datos'";					 
			$result=mysqli_query($conexion,$sql);
			$fila=mysqli_fetch_row($result);
			$datos=array(
			'IdCliente'=>$fila[0],
			'Nombre'=>$fila[1]
			);


	//		$sql="SELECT  *    from producto    where IdProducto=$IdProducto";       
	//		$result=mysqli_query($conexion,$sql);
	//		$fila = mysqli_fetch_row($result);
 	//		$nombre = $fila[6]; // 42
		   $idcliente =$fila[0];		
			return $idcliente;	
		}
	
}
 ?>