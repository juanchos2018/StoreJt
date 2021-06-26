<?php 

	$peticionAjax=true;

	require_once "../config/APP.php";

	if(isset($_POST['producto_nombre_reg'])){
		
		/* --------- Instancia al controlador -------*/
		require_once "../controladores/productoControlador.php";
		$ins_producto = new productoControlador();

		/* --------- Agregar producto -------*/
		if(isset($_POST['producto_nombre_reg'])){
			echo $ins_producto->agregar_producto_controlador();
		}

		
	}else{
		session_start(['name' => 'SJT']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}