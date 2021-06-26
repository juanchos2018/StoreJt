<?php

	require_once "mainModel.php";

	class promocionModelo extends mainModel{

		/* --------- Modelo agregar promocion -------*/
		protected static function agregar_promocion_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO promocion(Descripcion, Descuento, Estado) VALUES(:Descripcion,:Descuento,:Estado)");

			$sql->bindParam(":Descripcion",$datos['Descripcion']);
			$sql->bindParam(":Descuento",$datos['Descuento']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->execute();
			return $sql;

		}

		/* --------- Modelo datos promocion -------*/
		protected static function datos_promocion_modelo(){

			$sql=mainModel::conectar()->prepare("SELECT * FROM promocion");
			$sql->execute();
			return $sql;
		}


	}

