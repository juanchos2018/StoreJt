<?php

	require_once "mainModel.php";

	class loginModelo extends mainModel{
		
		/*------------ Modelo para iniciar sesión ---------*/
		protected static function iniciar_sesion_modelo($datos){	
			$sql=mainModel::conectar()->prepare("SELECT * FROM usuario WHERE NomUsuario=:NomUsuario AND Password=:Password AND Estado='A'");

			$sql->bindParam(":NomUsuario",$datos['NomUsuario']);
			$sql->bindParam(":Password",$datos['Password']);
			$sql->execute();
			return $sql;

		}
	}