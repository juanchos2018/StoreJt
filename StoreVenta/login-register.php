<!doctype html>
<html class="no-js" lang="zxx">    
<!-- login-register31:27-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Register || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
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
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <?php   require_once("componets/header.php");  ?>

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="#" >
                                <div class="login-form">
                                    <h4 class="login-title">Iniciar Sesion</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Correo*</label>
                                            <input class="mb-0" type="email" id="txtcorreo1" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Contraseña</label>
                                            <input class="mb-0" type="password" id="txtclave1" placeholder="Password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" type="button" id="btnlogin">  Ingresar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="#">
                                <div class="login-form">
                                    <h4 class="login-title">Registrar</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Nombre</label>
                                            <input class="mb-0" type="text" id="txtnombre" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Apellido</label>
                                            <input class="mb-0" type="text" id="txtapellido" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Correo*</label>
                                            <input class="mb-0" type="email" id="txtcorreo" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Contraseña</label>
                                            <input class="mb-0" type="password" id="txtclave" placeholder="Password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Conffirmar Contraseña</label>
                                            <input class="mb-0" type="password" id="txtclave2"  placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0" type="button" id="btnregsistrar" onclick="createuser()"> Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            <?php   require_once("componets/footer.php");  ?>


            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
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

        <script src="js/alertifyjs/alertify.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </body>

<!-- login-register31:27-->
</html>


<script>
    function createuser(){
        var nombre =$("#txtnombre").val();    
        var email = $("#txtcorreo").val();
        var password = $("#txtclave").val();
        var apellido=$("#txtapellido").val();
      //  console.log('login',email);
         var datos={nombre:nombre,apellido:apellido,correo:email,clave:password}   
        $.ajax({
            type:"POST",
            data:datos,
            url:"control/RegistrarCliente.php",
            success:function(r){           
                   // alert(r);
            if (r==1) {                
               alert("registado");
       //     window.location("login.php");
        //    window.location="Login.php";
            }
            else{              
                alertify.error("Nose Registro");
            }
            }
        });


    }
    $('#btnlogin').click(function(){
        var  correo =$("#txtcorreo1").val();
        var password =$("#txtclave1").val();
        
     if(correo==""){
        alert("Debes llenar todos los campos!!");
        return;
    }
        
    if(password==""){
        alert("Debes llenar todos los campos!!");
        return;
    }
    var datos ={correo:correo,password:password}
          $.ajax({
            type:"POST",
            data:datos,
            url:"control/LoginCliente.php",
            success:function(r){

                if(r==1){
                 //alert(r);
                    window.location="index.php";
                }else{
                    alert("error");
                //alert("No se pudo acceder :(");
                }
            }
        });
     });
</script>


