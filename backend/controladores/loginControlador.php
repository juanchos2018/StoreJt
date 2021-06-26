<?php
	if($peticionAjax){
		require_once "../modelos/loginModelo.php";
	}else{
		require_once "./modelos/loginModelo.php";
	}

	class loginControlador extends loginModelo{

		/*------------ Controlador para iniciar sesión ---------*/
		public function iniciar_sesion_controlador(){

			$usuario=mainModel::limpiar_cadena($_POST['usuario_log']);
			$password=mainModel::limpiar_cadena($_POST['clave_log']);


			if($usuario == "" || $password == ""){
				echo '
				<script>
					Swal.fire({
						title: "Ocurrio un error inesperado",
						text: "No ha llenado todo los campos que son requeridos",
						type: "error",
						confirmButtonText: "Aceptar"
						});
				</script>
				';

				exit();
			}


		//	$password=mainModel::encryption($password);

			$datos_login=[
				"NomUsuario"=>$usuario,
				"Password"=>$password
			];

			$datos_cuenta=loginModelo::iniciar_sesion_modelo($datos_login);

			if($datos_cuenta->rowCount()==1){
				
				$row=$datos_cuenta->fetch();

				session_start(['name'=>'SPM']);

				$_SESSION['id_spm'] = $row['IdUsuario'];
				$_SESSION['nombre_spm'] = $row['Nombre'];
				$_SESSION['apellidos_spm'] = $row['Apellidos'];
				$_SESSION['nomUsuario_spm'] = $row['NomUsuario'];
				$_SESSION['tipoUsuario_spm'] = $row['TipoUsuario'];
				$_SESSION['token_spm'] = md5(uniqid(mt_rand(),true));

				return header("Location: ".SERVERURL."home/");

			}else{
				echo '
					<script>
					Swal.fire({
						title: "Ocurrio un error inesperado",
						text: "EL USUARIO o PASSWORD son incorrectos",
						type: "error",
						confirmButtonText: "Aceptar"
						});
					</script>
				';

				exit();
			}

		}/*--------Fin de controlador--------*/


		/*------------ Controlador forzar cierre de sesion ---------*/

		public function forzar_cierre_sesions_controlador(){

			session_unset();
			session_destroy();

			if(headers_sent()){
				return "<script> Window.location.href='".SERVERURL."login/'; </script>";
			}else{
				return header("Location: ".SERVERURL."login/");
			}

		}/*--------Fin de controlador--------*/


		/*------------ Controlador cerrar sesion ---------*/
		public function cerrar_sesion_controlador(){

			session_start(['name'=>'SPM']);
			$token = mainModel::decryption($_POST['token']);
			$usuario = mainModel::decryption($_POST['usuario']);

			if($token == $_SESSION['token_spm'] && $usuario == $_SESSION['nomUsuario_spm']){

				session_unset();
				session_destroy();
				$alerta = [
					"Alerta"=>"redireccionar",
					"URL"=>SERVERURL."login/"
				]; 

			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No se pudo cerrar la sesión",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
		}/*--------Fin de controlador--------*/
	}