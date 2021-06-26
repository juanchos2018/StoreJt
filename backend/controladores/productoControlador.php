<?php


	if($peticionAjax){
		require_once "../modelos/productoModelo.php";
	}else{
		require_once "./modelos/productoModelo.php";
	}

	class productoControlador extends productoModelo{

		public function agregar_producto_controlador(){

			$IdCategoria=mainModel::limpiar_cadena($_POST['producto_categoria_reg']);
			$IdMarca=mainModel::limpiar_cadena($_POST['producto_marca_reg']);
			$IdSubcategoria=mainModel::limpiar_cadena($_POST['producto_subcategoria_reg']);
			$IdPromocion=mainModel::limpiar_cadena($_POST['producto_promocion_reg']);
			$IdUsuario=mainModel::limpiar_cadena($_POST['usuario_id_up']);

			$nombre=mainModel::limpiar_cadena($_POST['producto_nombre_reg']);
			$Descripcion=mainModel::limpiar_cadena($_POST['producto_descripcion_reg']);
			$PrecioCompra=mainModel::limpiar_cadena($_POST['producto_preciocompra_reg']);
			$PrecioVenta=mainModel::limpiar_cadena($_POST['producto_precioventa_reg']);
			$Fecha = date_default_timezone_get();
			$Cantidad=mainModel::limpiar_cadena($_POST['producto_cantidad_reg']);

			
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


			if($IdSubcategoria=="Seleccione"){
				$IdSubcategoria=NULL;
			}

			if($IdPromocion=="Seleccione"){
				$IdPromocion=NULL;
			}



			$datos_producto_reg=[
				"IdCategoria"=>$IdCategoria,
				"IdMarca"=>$IdMarca,
				"IdSubcategoria"=>$IdSubcategoria,
				"IdPromocion"=>$IdPromocion,
				"IdUsuario"=>1,
		
				"Nombre"=>$nombre,
				"Descripcion"=>$Descripcion,
				"PrecioCompra"=>$PrecioCompra,
				"PrecioVenta"=>$PrecioVenta,
				"Cantidad"=>$Cantidad,
				
				"Estado"=>"A"
			];

//echo json_encode($datos_producto_reg);
			//echo "<script> alert('entra') </script>";
			$agregar_producto=productoModelo::agregar_producto_modelo($datos_producto_reg);
			
			if($agregar_producto->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"Producto registrado",
					"Texto"=>"Los datos del producto han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar el producto",
					"Tipo"=>"error",
					"datos"=>$datos_producto_reg
				];
			}
			echo json_encode($alerta);
	
		} /* Fin controlador */

	}


