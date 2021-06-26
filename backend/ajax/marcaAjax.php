<?php 

	$peticionAjax=true;

	require_once "../config/APP.php";

	if(isset($_POST['marca_nombre_reg'])){
		
		/* --------- Instancia al controlador -------*/
		require_once "../controladores/marcaControlador.php";
		$ins_marca = new marcaControlador();

		/* --------- Agregar marca -------*/
		if(isset($_POST['marca_nombre_reg'])){
			echo $ins_marca->agregar_marca_controlador();
		}


	}else{
		session_start(['name' => 'SJT']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}