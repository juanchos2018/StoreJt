
 <?php 
  require_once("../Clases/Conectar.php"); 
  $c= new Conectar();
  $conexion=$c->conexion(); 


    $query3 = "SELECT  sum(precio) as total from carrito ";
    $result3 = mysqli_query($conexion, $query3);
    $row = mysqli_fetch_assoc($result3); 

    $query2 = "SELECT  sum(cantidad) as cantidad from carrito ";
    $result2 = mysqli_query($conexion, $query2);
    $row2 = mysqli_fetch_assoc($result2); 
                                     
  ?> 
<span class="item-icon"></span>
    <span class="item-text"> <?php echo $row['total']; ?>.00
    <span class="cart-item-count"> <?php echo $row2['cantidad']; ?> </span>
  </span>

