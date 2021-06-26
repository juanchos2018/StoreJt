
 <?php 
      require_once("Clases/Conectar.php"); 
        $c= new Conectar();
        $conexion=$c->conexion();
        $sql="SELECT ca.codigoproducto,  cal.Nombre,cal.PrecioVenta,ca.cantidad from carrito as ca 
        inner join producto as cal 
        on ca.codigoproducto= cal.IdProducto";
        $resultado=mysqli_query($conexion,$sql);

        $query2 = " SELECT  SUM(precio * cantidad ) AS total from carrito";
        $result2 = mysqli_query($conexion, $query2);
        $row = mysqli_fetch_assoc($result2);  
     ?>  

<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">

       <!-- Begin Header Area -->
       <?php   require_once("componets/header.php");  ?>

<div class="checkout-area pt-60 pb-30">
 <div class="container">
      <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="#">
                                <div class="checkbox-form">
                                    <h3>Detalle de Envio</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select clearfix">
                                                <label>Departamento <span class="required">*</span></label>
                                                <select class="nice-select wide" id="selecdepartamento">                                                
                                                  <option value="Tacna">Tacna</option>
                                                  <option value="Moquegua">Moquegua</option>
                                                  <option value="Arequipa">Arequipa</option>   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Provincia <span class="required">*</span></label>
                                                <input placeholder="" type="text" id="txtprovincia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Distrito <span class="required">*</span></label>
                                                <input placeholder="" type="text" id="txtdistrito">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Direccion</label>
                                                <input placeholder=""id="txtdireccion"  type="text">
                                            </div>
                                        </div>                          
                                       </div>                                 
                                </div>
                            </form>
                        </div>

                        
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Mi Pedido</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table" id="tbpagar">
                                        <thead>
                                            <tr>
                                            <th style="display:none;">  idproducto</th>
                                                <th class="cart-product-name">Producto</th>
                                                <th class="cart-product-total">cantidad</th>
                                                <th class="cart-product-total">SubTotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                        
                                        <?php 
                                        while ($ver=mysqli_fetch_row($resultado)) :                                
                                        ?>
                                                <tr class="cart_item">
                                                <td style="display:none;"><?php echo  $ver[0]; ?> </td>
                                                <td class="PRODUCTO"><?php echo  $ver[1]; ?> </td>
                                                <td class="cart-product-name"><?php echo  $ver[3]; ?></td>
                                                <td class="cart-product-total"> <span class="amount"> <?php echo  $ver[2]*$ver[3]; ?></span></td>
                                               
                                            </tr>
                                            <?php endwhile ?>                                           
                                        </tbody>                                     
                                    </table>

                                    <table>
                                    <tfoot>                                      
                                        <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount"><?php echo $row['total']; ?></span></strong></td>
                                        <input type="number"  id="TotalVenta" value="<?php echo $row['total']; ?>">
                                    </tr>
                                    </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                              <p>Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.
.</p>                                            
                                            </div>
                                            </div>
                                          </div>  
                                        <div class="order-button-payment">
                                            <input value="Procesar Pago"   id="buyButton"  type="button">
                                                <button type="button"  onclick="Venta()" class="btn btn-primary">   Pagar </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>    
         <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>    
        <script src="https://checkout.culqi.com/js/v3"></script>
        <script src="js/alertifyjs/alertify.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

<script>

Culqi.publicKey = 'pk_test_9603f52d6caf5238';


 $('#buyButton').on('click', function(e) {
     // Abre el formulario con las opciones de Culqi.settings
   producto="Compra productos";
  var  precio=$("#TotalVenta").val();
  var Total =parseInt(precio)*100;
  Culqi.settings({
     title: producto,
     currency: 'PEN',
     description: producto,
     amount:Total
   });
     Culqi.open();
     e.preventDefault();
 });

 $("#btnclick").click(function(){
      
        var departamento =$("#selecdepartamento").val();
        var provincia =$("#txtprovincia").val();
        var distrito = $("#txtdistrito").val();
        var direccion =$("#txtdireccion").val();
        var  precio=$("#TotalVenta").val();
    var params = {       
        IdUsuario:"1",
        TipoComprobante:"tipo",
        TipoPago:"Pago",
        Departamento:departamento,
        Provincia:provincia,
        Distrito:distrito,
        Direccion:direccion,
        AdelantoPrecio:"100",
        Total:precio,
        Estado:"A",
    };
    $.ajax({
        type: "POST",
        data: params,     
        url: "control/VentaCliente.php",
        success: function(r) {                 
               RecoorerTabla(r);      
               alert("Regitrado venta");              
        }
    });


 });

 function Venta(){
     
    var departamento =$("#selecdepartamento").val();
        var provincia =$("#txtprovincia").val();
        var distrito = $("#txtdistrito").val();
        var direccion =$("#txtdireccion").val();
        var  precio=$("#TotalVenta").val();
    var params = {       
        IdUsuario:"1",
        TipoComprobante:"tipo",
        TipoPago:"Pago",
        Departamento:departamento,
        Provincia:provincia,
        Distrito:distrito,
        Direccion:direccion,
        AdelantoPrecio:"100",
        Total:precio,
        Estado:"A",
    };
    $.ajax({
        type: "POST",
        data: params,     
        url: "control/VentaCliente.php",
        success: function(r) {                 
               RecoorerTabla(r);      
               alert("Regitrado venta");                  
               $('#menucarrito').load("componets/menucarro.php");
               $('#minicarto').load("componets/TablaMiniCarrito.php");
        }
    });
 }

 function RecoorerTabla(idventa){        

    $("#tbpagar tr").each(function () {
        var self = $(this);
        var idproducto = self.find("td:eq(0)").text().trim();
        var nombre = self.find("td:eq(1)").text().trim();       
        var cantidad = self.find("td:eq(2)").text().trim();      
        var suboltal = self.find("td:eq(3)").text().trim();                
         var result = idproducto + " - " + nombre +"-"+ cantidad+"-"+suboltal;
         console.log(result);        
         var params = {       
            IdVenta:idventa,
            IdProducto:idproducto,
            cantidad:cantidad,
            precio:suboltal                              
            };
            $.ajax({
                type: "POST",
                data: params,     
                url: "control/VentaDetalle.php",
                success: function(r) {    
                  console.log(r); 
                 
                }
            });
        });  
 }

function culqi() {
        if (Culqi.token) {
            var token = Culqi.token.id;
            console.log(token);
            var Total =  $("#TotalVenta").val();
            if (Total == "") {
                alert("total vvacio")
                return;
            }
            if (Total==0) {
                alert("total vvacio")
                return;
            }
            var Total1 =parseInt(Total)*100;
            var correo = Culqi.token.email;
            var data = { producto: 'productos', correo: correo, token: token, total: Total1 }
            $.ajax({
                url: 'procesarPago.php',
                type: 'POST',
                data: data,
                datatype: 'json',
                success: function (response) {
                    console.log(response)
                  //  alert("venta Exitosa")      
                    Venta();          
                   
                },
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }else{
            console.log(Culqi.error);
            alert(Culqi.error.user_message);
        }
}




</script>
