<?php

session_start();

if (isset($_POST['add'])){
     print_r($_POST['IdProducto']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "IdProducto");

        if(in_array($_POST['IdProducto'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
         //   echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'IdProducto' => $_POST['IdProducto']
            );

            $_SESSION['cart'][$count] = $item_array;
            $obj=1;
            echo $obj;
        }

    }else{

        $item_array = array(
                'IdProducto' => $_POST['IdProducto']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
        $obj=1;
        echo $obj;
    }
}


?>