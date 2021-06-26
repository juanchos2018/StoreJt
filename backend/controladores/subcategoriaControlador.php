<?php


	if($peticionAjax){
		require_once "../modelos/subcategoriaModelo.php";
	}else{
		require_once "./modelos/subcategoriaModelo.php";
	}

	class subcategoriaControlador extends subcategoriaModelo{

		public function agregar_subcategoria_controlador(){

			$nombre=mainModel::limpiar_cadena($_POST['subcategoria_nombre_reg']);
			
			if($nombre==""){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No has llenado todos los campos que son obligatorios",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}

			if(mainModel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}",$nombre)){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El NOMBRE no coincide con el formato solicitado",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}


			$datos_subcategoria_reg=[
				"Nombre"=>$nombre,
				"Estado"=>"A"
			];

			$agregar_subcategoria=subcategoriaModelo::agregar_subcategoria_modelo($datos_subcategoria_reg);

			if($agregar_subcategoria->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"Sub categoría registrada",
					"Texto"=>"Los datos de la sub categoría han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar la sub categoría",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
	
		} /* Fin controlador */


		/* --------- Controlador de datos usuario -------*/
		public function datos_subcategoria_controlador(){

			return subcategoriaModelo::datos_subcategoria_modelo();

		}/* Fin controlador */




	}
