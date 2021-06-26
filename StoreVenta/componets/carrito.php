<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>carrito</title>
    <?php 
      require_once("../Clases/Conectar.php"); 
        $c= new Conectar();
        $conexion=$c->conexion();

      //  $query3 = "SELECT  sum(precio) as total from carrito ";
        $query3 = " SELECT  SUM(precio * cantidad ) AS total from carrito";
        $result3 = mysqli_query($conexion, $query3);
        $row = mysqli_fetch_assoc($result3); 


        $sql="SELECT cal.Nombre,cal.PrecioVenta,ca.cantidad,ca.img from carrito as ca 
        inner join producto as cal 
        on ca.codigoproducto= cal.IdProducto";
        $resultado=mysqli_query($conexion,$sql);
     ?>  

</head>
<body>

<div class="container">	
	  <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                           
                                    <div class="table-responsive shopping-cart">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>img</th>
                                                    <th>Producto</th>
                                                    <th>Precio</th>
                                                    <th>Cantidad</th>                                                        
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <?php 
                                            while ($ver=mysqli_fetch_row($resultado)) :                                            
                                              ?>
                                                <tr>
                                                <td>  <img src="http://localhost/Storejt/backend/<?php echo $ver[3]; ?>"   width="47px" height="47px" alt="cart products">                   
           </td>
                                                    <td><?php echo  $ver[0]; ?></td>
                                                    <td><?php echo  $ver[1]; ?></td>
                                                     <td><?php echo  $ver[2]; ?></td>
                                                     <td> <button class="btn btn-danger"> X </button> </td>
                                                </tr>
                                                <?php endwhile ?>                                                                                              
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                  <br>  
                                    <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Total Compra</h2>
                                            <ul>
                                                <li>Subtotal <span> <?php echo $row['total']; ?>.00</span></li>
                                                <li>Total <span><?php echo $row['total']; ?>.00</span></li>
                                            </ul>
                                            <?php     if (isset($_SESSION['correo'])) { ?>
                                                <a href="CheckOut.php">Procesar Pago</a>
                                             <?php     } else{ ?>
                                             
                                                <a href="login-register.php">Procesar Pago</a>
                                              <?php     } ?>                                         
                                          
                                        </div>
                                    </div>
                                </div>
                                </div><!--end card-->
                            </div><!--end card-body-->
                        </div><!--end col-->
                    </div><!--end row--> 
</div> 
	
</body>
</html>


