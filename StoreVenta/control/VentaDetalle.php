<?php 
require_once("../Clases/Conectar.php");
require_once("../Clases/Venta.php");

$obj = new Venta();
//	$sql="INSERT INTO detalle_venta (IdVenta,IdProducto,cantidad,precio)
$datos=array(
$_POST['IdVenta'],
$_POST['IdProducto'],
$_POST['cantidad'],
$_POST['precio'],
);

echo $obj->AgregarDetallle($datos);
 ?>
