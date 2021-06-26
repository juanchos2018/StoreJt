<?php 

class Venta
{
	public	function AgregarVenta($datos)
	{		
		$c= new Conectar();
		$conexion=$c->conexion();	
		$sql="INSERT INTO venta (IdUsuario,Fecha,TipoComprobante,TipoPago,Departamento,Provincia,Distrito,Direccion,AdelantoPrecio,Total,Estado)
         
		values('$datos[0]',
			    now(),
			   '$datos[1]',
			   '$datos[2]',
			   '$datos[3]',
               '$datos[4]',
               '$datos[5]',
               '$datos[6]',
               '$datos[7]',
               '$datos[8]',
               '$datos[9]')";
	  //  $result= mysqli_query($conexion,$sql);
        if (mysqli_query($conexion, $sql)) {
            $last_id = mysqli_insert_id($conexion);
            return  $last_id;
        } else {
            return 0;
        }
        ///return $conexion->insert_id;
	}

    public	function AgregarDetallle($datos)
	{		
		$c= new Conectar();
		$conexion=$c->conexion();			
		$sql="INSERT INTO detalle_venta (IdVenta,IdProducto,cantidad,precio)
		values('$datos[0]',
			   '$datos[1]',
			   '$datos[2]',
			   '$datos[3]' )";
	    return mysqli_query($conexion,$sql);
	}


}
 ?>