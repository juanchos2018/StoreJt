<?php


	if($peticionAjax){
		require_once "../modelos/categoriaModelo.php";
	}else{
		require_once "./modelos/categoriaModelo.php";
	}

	class categoriaControlador extends categoriaModelo{

		public function agregar_categoria_controlador(){

			$nombre=mainModel::limpiar_cadena($_POST['categoria_nombre_reg']);
			
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


			$datos_categoria_reg=[
				"Nombre"=>$nombre,
				"Estado"=>"A"
			];

			$agregar_categoria=categoriaModelo::agregar_categoria_modelo($datos_categoria_reg);

			if($agregar_categoria->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"Categoría registrada",
					"Texto"=>"Los datos de la categoría han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar la categoría",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
	
		} /* Fin controlador */


		/* --------- Controlador de datos categoria -------*/
		public function datos_categoria_controlador(){

			return categoriaModelo::datos_categoria_modelo();

		}/* Fin controlador */


	}
