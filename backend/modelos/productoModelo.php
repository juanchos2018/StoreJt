<?php

	require_once "mainModel.php";

	class productoModelo extends mainModel{

		/* --------- Modelo agregar Producto -------*/
		protected static function agregar_producto_modelo($datos){
			
			$sql=mainModel::conectar()->prepare("INSERT INTO producto(IdCategoria,IdMarca,IdSubcategoria,IdPromocion,IdUsuario,Nombre,Descripcion,PrecioCompra,PrecioVenta,Cantidad,Fecha,Estado)
			 VALUES(:IdCategoria,:IdMarca,:IdSubcategoria,:IdPromocion,:IdUsuario,:Nombre,:Descripcion,:PrecioCompra,:PrecioVenta,:Cantidad,NOW(),:Estado)");


			$sql->bindParam(":IdCategoria",$datos['IdCategoria']);
			$sql->bindParam(":IdMarca",$datos['IdMarca']);
			$sql->bindParam(":IdSubcategoria",$datos['IdSubcategoria']);
			$sql->bindParam(":IdPromocion",$datos['IdPromocion']);
			$sql->bindParam(":IdUsuario",$datos['IdUsuario']);
			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Descripcion",$datos['Descripcion']);
			$sql->bindParam(":PrecioCompra",$datos['PrecioCompra']);
			$sql->bindParam(":PrecioVenta",$datos['PrecioVenta']);
			$sql->bindParam(":Cantidad",$datos['Cantidad']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->execute();
			return $sql;

		}

	}