<div class="hm-menu">
    <?php 

        require_once("../Clases/Conectar.php"); 
        session_start();

        $c= new Conectar();
        $conexion=$c->conexion(); 
        $sql = "SELECT * from producto";
        $result = mysqli_query($conexion, $sql);

        if (isset($_SESSION['cart'])){
            $IdProducto = array_column($_SESSION['cart'], 'IdProducto');

            while ($row = mysqli_fetch_assoc($result)){
                foreach ($IdProducto as $id){
                    if ($row['IdProducto'] == $id){
            ?> 
            
            <ul class="minicart-product-list">
                <li>
                    <a href="#" class="minicart-product-image">
                        <img src="images/product/large-size/1.jpg" width="47px" height="47px" alt="cart products">                   
                    </a>
                    <div class="minicart-product-details">
                        <h6><a href="#"><?php echo $row["Nombre"]; ?> </a></h6>                      
                    </div>
                    <button class="close" title="Remove"  onclick="DeleteItem('<?php  echo $row["IdProducto"]; ?>')" >
                        <i class="fa fa-close"></i>
                    </button>
                </li>
            </ul>            
            <?php
                    }
                }
            }
        }
    ?>

    <p class="minicart-total">SUBTOTAL: <span>1000</span></p>
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