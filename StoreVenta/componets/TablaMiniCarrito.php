<?php 

require_once("../Clases/Conectar.php"); 
    $c= new Conectar();
    $conexion=$c->conexion();   
    
    session_start();
  
?>
<div class="hm-menu">
    <?php 
        $query3 = "SELECT ca.codigoproducto, count(ca.codigoproducto) as cantidad, sum(cal.PrecioVenta) as precio, cal.Nombre,ca.img from carrito as ca
            inner join producto as cal 
            on cal.IdProducto=ca.codigoproducto 
            group by ca.codigoproducto ";
   
        $query2 = "SELECT  sum(precio) as total from carrito ";
        $result2 = mysqli_query($conexion, $query2);
        $row = mysqli_fetch_assoc($result2);  
              
        $result3 = mysqli_query($conexion, $query3);
        if(mysqli_num_rows($result3) > 0)
        {
            while($row3 = mysqli_fetch_array($result3))
            {
            ?> <ul class="minicart-product-list">
        <li>
            <a href="#" class="minicart-product-image">
            <img src="http://localhost/Storejt/backend/<?php echo $row3["img"]; ?>"   width="47px" height="47px" alt="cart products">                   
           
            </a>
            <div class="minicart-product-details">
                <h6><a href="#"><?php echo $row3["Nombre"]; ?> </a></h6>
                <span><?php echo $row3["precio"]." X ".$row3['cantidad']; ?> </span>
            </div>
            <button class="close" title="Remove"  onclick="DeleteItem('<?php  echo $row3["codigoproducto"]; ?>')" >
                <i class="fa fa-close"></i>
            </button>
        </li>
    </ul>
    <?php
            }
        }
    ?>

    <p class="minicart-total">SUBTOTAL: <span><?php echo $row['total']; ?></span></p>
    <div class="minicart-button">
        <a href="Carrito.php" class="li-button li-button-fullwidth li-button-dark">
            <span>Ver Carrito</span>
        </a>
        <?php if (isset($_SESSION['correo'])) { ?>            
            <a href="CheckOut.php" class="li-button li-button-fullwidth">
            <span>PAgar</span>
           </a>
            <?php } else { ?>     
            <a href="login-register.php" class="li-button li-button-fullwidth">
            <span>PAgar</span>
          </a>
         <?php } ?>        
    </div>
</div>
<br>


<script>

function DeleteItem(idArticulo) {
    alertify.confirm('¿Desea eliminar este articulo?', function() {
        $.ajax({
            type: "POST",
            data: "idproducto=" + idArticulo,
            url: "control/carrito/DeleteItem.php",
            success: function(r) {
               // alert(r)
                if (r == 1) {                  
                    
                    $('#menucarrito').load("componets/menucarro.php");
                    $('#minicarto').load("componets/TablaMiniCarrito.php");

                    alertify.success("Eliminado con exito!!");
                } else {                 
                    alertify.error("No se pudo eliminar :(");
                }
            }
        });
    }, function() {
        alertify.error('Cancelo !')
    });
}
</script>