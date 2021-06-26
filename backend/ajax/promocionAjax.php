<?php 

	$peticionAjax=true;

	require_once "../config/APP.php";

	if(isset($_POST['promocion_descripcion_reg'])){
		
		/* --------- Instancia al controlador -------*/
		require_once "../controladores/promocionControlador.php";
		$ins_promocion = new promocionControlador();

		/* --------- Agregar Promocion -------*/
		if(isset($_POST['promocion_descripcion_reg'])){
			echo $ins_promocion->agregar_promocion_controlador();
		}


	}else{
		session_start(['name' => 'SJT']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}