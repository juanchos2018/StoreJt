<?php


	if($peticionAjax){
		require_once "../modelos/marcaModelo.php";
	}else{
		require_once "./modelos/marcaModelo.php";
	}

	class marcaControlador extends marcaModelo{

		public function agregar_marca_controlador(){

			$nombre=mainModel::limpiar_cadena($_POST['marca_nombre_reg']);
			
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


			$datos_marca_reg=[
				"Nombre"=>$nombre,
				"Estado"=>"A"
			];

			$agregar_marca=marcaModelo::agregar_marca_modelo($datos_marca_reg);

			if($agregar_marca->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"Marca registrada",
					"Texto"=>"Los datos de la marca han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar la marca",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
	
		} /* Fin controlador */


		/* --------- Controlador de datos marca -------*/
		public function datos_marca_controlador(){

			return marcaModelo::datos_marca_modelo();

		}/* Fin controlador */

	}
