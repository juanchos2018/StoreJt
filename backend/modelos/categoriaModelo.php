<?php

	require_once "mainModel.php";

	class categoriaModelo extends mainModel{

		/* --------- Modelo agregar usuario -------*/
		protected static function agregar_categoria_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO categoria(Nombre, Estado) VALUES(:Nombre,:Estado)");

			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->execute();
			return $sql;

		}


		/* --------- Modelo datos categoria -------*/
		protected static function datos_categoria_modelo(){

			$sql=mainModel::conectar()->prepare("SELECT * FROM categoria");
			$sql->execute();
			return $sql;
		}

	}