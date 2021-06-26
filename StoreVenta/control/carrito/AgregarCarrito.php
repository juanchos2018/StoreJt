<?php 
require_once("../../Clases/Conectar.php");
require_once("../../Clases/Carrito.php");

$obj = new Carrito();

$datos=array(
$_POST['idusu'],$_POST['cop'],$_POST['cant'],$_POST['prec'],$_POST['img']
);

echo $obj->AgregarCarrito($datos);
 ?>
