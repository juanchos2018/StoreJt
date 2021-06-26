<?php 

	$peticionAjax=true;

	require_once "../config/APP.php";

	if(isset($_POST['subcategoria_nombre_reg'])){
		
		/* --------- Instancia al controlador -------*/
		require_once "../controladores/subcategoriaControlador.php";
		$ins_subcategoria = new subcategoriaControlador();

		/* --------- Agregar Categoria -------*/
		if(isset($_POST['subcategoria_nombre_reg'])){
			echo $ins_subcategoria->agregar_subcategoria_controlador();
		}


	}else{
		session_start(['name' => 'SJT']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}