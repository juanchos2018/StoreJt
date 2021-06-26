<?php
	require_once "mainModel.php";

	class usuarioModelo extends mainModel{

		/* --------- Modelo agregar usuario -------*/
		protected static function agregar_usuario_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO usuario(Dni, Nombre, Apellidos, NomUsuario, Password, Celular, TipoUsuario, Estado) VALUES(:Dni,:Nombre,:Apellido,:nomUsuario,:Password,:Celular,:tipoUsuario,:Estado)");

			$sql->bindParam(":Dni",$datos['Dni']);
			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Apellido",$datos['Apellido']);
			$sql->bindParam(":nomUsuario",$datos['nomUsuario']);
			$sql->bindParam(":Password",$datos['Password']);		
			$sql->bindParam(":Celular",$datos['Celular']);
			$sql->bindParam(":tipoUsuario",$datos['tipoUsuario']);
			$sql->bindParam(":Estado",$datos['Estado']);
			
			$sql->execute();
			return $sql;

		}


		/* --------- Modelo eliminar usuario -------*/

		protected static function eliminar_usuario_modelo($id){
			$sql = mainModel::conectar()->prepare("UPDATE usuario SET Estado='D' WHERE IdUsuario=:ID");

			$sql->bindParam(":ID",$id);
			$sql->execute();
			return $sql;
		}

		/* --------- Modelo datos usuario -------*/
		protected static function datos_usuario_modelo($tipo, $id){
			if($tipo=="Unico"){
				$sql=mainModel::conectar()->prepare("SELECT * FROM usuario WHERE IdUsuario=:ID");
				$sql->bindParam(":ID",$id);
				

			}else if($tipo="Conteo"){
				$sql=mainModel::conectar()->prepare("SELECT IdUsuario FROM usuario WHERE Estado = 'A'");


			}
			$sql->execute();
			return $sql;
		}
	}