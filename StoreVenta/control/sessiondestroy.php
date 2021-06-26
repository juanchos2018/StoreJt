<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();
// Finalmente, destruir la sesión.
session_destroy();



require_once "../Clases/Conectar.php";
require_once "../Clases/Carrito.php";
$obj=new Carrito();
echo $obj->DelteItemAll();
$estado="1";
echo $estado;
?>