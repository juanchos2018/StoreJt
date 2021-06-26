<?php 
require_once("../Clases/Conectar.php");
require_once("../Clases/Cliente.php");
//	$sql="INSERT INTO clientes (Dni,Nombre,Apellidos,Celular,Correo,Password,Sexo,Estado)
$obj = new Cliente();
//$fecha= $_POST['dia']. "/".$_POST['mes']."/".$_POST['ano']; 
$dni="451231";
$celular="112111";
$sexo="M";
$estado="A";
$datos=array(
$dni,    
$_POST['nombre'],
$_POST['apellido'],
$celular,
$_POST['correo'],
$_POST['clave'],
$sexo,
$estado
);

echo $obj->RegistrarCliente($datos);
 ?>
