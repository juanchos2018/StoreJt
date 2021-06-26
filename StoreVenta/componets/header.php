<?php 
    require_once("Clases/Conectar.php"); 
    $c= new Conectar();
     $conexion=$c->conexion();      
     session_start();
?>

<header>
          <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span>Acceso</span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                <?php 
                                                     if (isset($_SESSION['correo'])) {                                                        
                                                      ?>
                                                       <li><a href="#"><?php echo $_SESSION['correo'] ?></a></li>
                                                       <li><a id="asalir">Salir</a></li>
                                                       <?php   
                                                        }
                                                        else
                                                        {
                                                          $_SESSION=null;
                                                          ?>
                                                             <li><a href="#">User Null</a></li>
                                                             <li><a href="login-register.php">Registro</a></li>
                                                          <?php
                                                              }                                                   
                                                       ?>                                                   
                                                </ul>
                                            </div>
                                        </li>
                                       
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="images/menu/logo/empresajtgamer.png" width="200" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    
                                    <input type="text" placeholder="Buscar ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->

                                        <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <div id="menucarrito">
                                            </div>
                                        </div>

                                        <div class="minicart">
                                            <div id="minicarto">

                                            </div>
                                        </div>
                                    </li>

                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"> <a href="index.php">Inicio</a>   </li>

                                            <?php 
                                           $query4 = "SELECT * from categoria";            
                                            $result4 = mysqli_query($conexion, $query4);
                                            if(mysqli_num_rows($result4) > 0)
                                            {
                                                while($row4 = mysqli_fetch_array($result4))
                                                {
                                                ?>
                                                    <li><a href="ProductosCategory.php?IdCategoria='<?php echo $row4["IdCategoria"]; ?>'"><?php echo $row4["Nombre"]; ?></a></li>
                                                                                    
                                                <?php
                                                    }
                                                }
                                            ?>
                                      </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
         
         
 <script type="text/javascript"> 
$(document).ready(function() {
    //alert("asdsadsa")
    $('#menucarrito').load("componets/menucarro.php");
    $('#minicarto').load("componets/TablaMiniCarrito.php");
});


$("#asalir").click(function(){
    $.ajax({
        type: "GET",       
        url: "control/sessiondestroy.php",
        success: function(r) {       
            window.location="index.php";
        }
    });
});
</script>