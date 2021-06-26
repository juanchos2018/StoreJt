<?php 
require_once("../Clases/Conectar.php");
require_once("../Clases/Venta.php");
require_once("../Clases/Carrito.php");
$obj = new Venta();
session_start();
$idcliente =$_SESSION['IdCliente'];
$datos=array(
$idcliente,
$_POST['TipoComprobante'],
$_POST['TipoPago'],
$_POST['Departamento'],
$_POST['Provincia'],
$_POST['Distrito'],
$_POST['Direccion'],
$_POST['AdelantoPrecio'],
$_POST['Total'],
$_POST['Estado'],
);


$objcar=new Carrito();
$objcar->DelteItemAll();

echo $obj->AgregarVenta($datos);
 ?>
