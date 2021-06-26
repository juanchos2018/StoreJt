<?php 

session_start();

require_once("../Clases/Conectar.php");
require_once("../Clases/Cliente.php");

$obj = new Cliente();


$datos= array($_POST['correo'],
 $_POST['password'] );


echo $obj->LoginCliente($datos);


 ?>