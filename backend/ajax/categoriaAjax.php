<?php 

	$peticionAjax=true;

	require_once "../config/APP.php";

	if(isset($_POST['categoria_nombre_reg'])){
		
		/* --------- Instancia al controlador -------*/
		require_once "../controladores/categoriaControlador.php";
		$ins_categoria = new categoriaControlador();

		/* --------- Agregar Categoria -------*/
		if(isset($_POST['categoria_nombre_reg'])){
			echo $ins_categoria->agregar_categoria_controlador();
		}


	}else{
		session_start(['name' => 'SJT']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}