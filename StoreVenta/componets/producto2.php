<?php 
require_once("Clases/Conectar.php"); 
    $c= new Conectar();
     $conexion=$c->conexion();      
?>

<section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                                    
                                </ul>
                            </div>
                            <div class="row">

                                <div class="product-active owl-carousel">
                                <?php 
                                $query4 = "SELECT  pro.IdProducto,pro.Nombre,pro.PrecioVenta,pro.Descripción,cate.Nombre  AS namecategoria,cate.IdCategoria,pro.UrlImagen  from producto  AS pro 
                                INNER  JOIN categoria AS cate
                                ON pro.IdCategoria =cate.IdCategoria
                                LIMIT 6";            
                                    $result4 = mysqli_query($conexion, $query4);
                                    if(mysqli_num_rows($result4) > 0)
                                    {
                                        while($row4 = mysqli_fetch_array($result4))
                                        {
                                        ?>
                                   
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                            <a href="ProducDetail.php?IdProducto='<?php echo $row4["IdProducto"]; ?>'&IdCategoria='<?php echo $row4["IdCategoria"]; ?>'">
                                            <img src="http://localhost/Storejt/backend/<?php echo $row4["UrlImagen"]; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html"><?php echo $row4["namecategoria"]; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">                                                       
                                                        <span class="new-price"> <?php echo $row4["PrecioVenta"]; ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a   onclick="AddCart('<?php echo $row4["IdProducto"] ?>','<?php echo $row4["PrecioVenta"]; ?>','<?php echo $row4["UrlImagen"]; ?>')" >Agregar</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>

                                    <?php
                                            }
                                        }
                                    ?>

                                </div>
                               
                            </div>                        
                        </div>                     
                        <!-- Li's Section Area End Here -->
                    </div>

                </div>
            </section>
            