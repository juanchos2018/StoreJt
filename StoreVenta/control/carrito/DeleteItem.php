<?php 

require_once "../../Clases/Conectar.php";
require_once "../../Clases/Carrito.php";
$obj=new Carrito();
$idart=$_POST['idproducto'];
echo $obj->DelteItem($idart);

 ?>