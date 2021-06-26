<?php

	require_once "mainModel.php";

	class subcategoriaModelo extends mainModel{

		/* --------- Modelo agregar subcategoria -------*/
		protected static function agregar_subcategoria_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO subcategoria(Nombre, Estado) VALUES(:Nombre,:Estado)");

			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->execute();
			return $sql;

		}

		/* --------- Modelo datos subcategoria -------*/
		protected static function datos_subcategoria_modelo(){

			$sql=mainModel::conectar()->prepare("SELECT * FROM subcategoria");
			$sql->execute();
			return $sql;
		}




	}