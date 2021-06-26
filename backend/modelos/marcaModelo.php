<?php

	require_once "mainModel.php";

	class marcaModelo extends mainModel{

		/* --------- Modelo agregar marca -------*/
		protected static function agregar_marca_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO marca(Nombre, Estado) VALUES(:Nombre,:Estado)");

			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->execute();
			return $sql;
		}


		/* --------- Modelo datos marca -------*/
		protected static function datos_marca_modelo(){

			$sql=mainModel::conectar()->prepare("SELECT * FROM marca");
			$sql->execute();
			return $sql;
		}

	}