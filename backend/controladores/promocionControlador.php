<?php


	if($peticionAjax){
		require_once "../modelos/promocionModelo.php";
	}else{
		require_once "./modelos/promocionModelo.php";
	}

	class promocionControlador extends promocionModelo{

		public function agregar_promocion_controlador(){

			$descripcion=mainModel::limpiar_cadena($_POST['promocion_descripcion_reg']);

			$descuento=mainModel::limpiar_cadena($_POST['promocion_descuento_reg']);
			
			if($descripcion=="" || $descuento==""){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No has llenado todos los campos que son obligatorios",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}

			if(mainModel::verificar_datos("[0-9-]{1,10}",$descuento)){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El descuento no coincide con el formato solicitado",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}


			$datos_promocion_reg=[
				"Descripcion"=>$descripcion,
				"Descuento"=>$descuento,
				"Estado"=>"A"
			];

			$agregar_promocion=promocionModelo::agregar_promocion_modelo($datos_promocion_reg);

			if($agregar_promocion->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"Promoción registrada",
					"Texto"=>"Los datos de la promoción han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar la promoción",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
	
		} /* Fin controlador */


		/* --------- Controlador de datos categoria -------*/
		public function datos_promocion_controlador(){

			return promocionModelo::datos_promocion_modelo();

		}/* Fin controlador */




	}
