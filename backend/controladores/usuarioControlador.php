<?php
	if($peticionAjax){
		require_once "../modelos/usuarioModelo.php";
	}else{
		require_once "./modelos/usuarioModelo.php";
	}

	class usuarioControlador extends usuarioModelo{

		/* --------- Controlador agregar usuario -------*/
		public function agregar_usuario_controlador(){

			$dni=mainModel::limpiar_cadena($_POST['usuario_dni_reg']);
			$nombre=mainModel::limpiar_cadena($_POST['usuario_nombre_reg']);
			$apellidos=mainModel::limpiar_cadena($_POST['usuario_apellido_reg']);

			$nomUsuario=mainModel::limpiar_cadena($_POST['usuario_usuario_reg']);
			$celular=mainModel::limpiar_cadena($_POST['usuario_celular_reg']);
			$tipoUsuario=mainModel::limpiar_cadena($_POST['usuario_tipo_reg']);

			$clave1=mainModel::limpiar_cadena($_POST['usuario_clave_1_reg']);

			$clave2=mainModel::limpiar_cadena($_POST['usuario_clave_2_reg']);
			

			/* --------- Comprobar los campos vacios -------*/	
			if($dni=="" || $nombre=="" || $apellidos=="" || $nomUsuario=="" || $clave1=="" || $clave2==""){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No has llenado todos los campos que son obligatorios",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}


			/*== Verificando integridad de los datos ==*/
			if(mainModel::verificar_datos("[0-9-]{8}",$dni)){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El DNI no coincide con el formato solicitado",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}

			if(mainModel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}",$nombre)){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El NOMBRE no coincide con el formato solicitado",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}

			if(mainModel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}",$apellidos)){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El APELLIDO no coincide con el formato solicitado",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}


			/*== Comprobando DNI ==*/
			$check_dni=mainModel::ejecutar_consulta_simple("SELECT Dni FROM usuario WHERE Dni='$dni'");
			if($check_dni->rowCount()>0){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El DNI ingresado ya se encuentra registrado en el sistema",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}

			/*== Comprobando usuario ==*/
			$check_user=mainModel::ejecutar_consulta_simple("SELECT NomUsuario FROM usuario WHERE NomUsuario='$nomUsuario'");
			if($check_user->rowCount()>0){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El NOMBRE DE USUARIO ingresado ya se encuentra registrado en el sistema",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}


			/*== Comprobando privilegio ==*/
			if($tipoUsuario != "Admin" && $tipoUsuario != "Empleado"){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"El tipo de Usuario seleccionado no es valido",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}




			/*== Comprobando claves ==*/
			if($clave1!=$clave2){
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"Las claves que acaba de ingresar no coinciden",
					"Tipo"=>"error"
				];
				echo json_encode($alerta);
				exit();
			}else{
				$clave=mainModel::encryption($clave1);
			}

			$datos_usuario_reg=[
				"Dni"=>$dni,
				"Nombre"=>$nombre,
				"Apellido"=>$apellidos,
				"nomUsuario"=>$nomUsuario,
				"Password"=>$clave,
				"Celular"=>$celular,
				"tipoUsuario"=>$tipoUsuario,
				"Estado"=>"A"

			];

			$agregar_usuario=usuarioModelo::agregar_usuario_modelo($datos_usuario_reg);


			if($agregar_usuario->rowCount()==1){
				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"usuario registrado",
					"Texto"=>"Los datos del usuario han sido registrados con exito",
					"Tipo"=>"success"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No hemos podido registrar el usuario",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
		} /* Fin controlador */


		/* --------- Controlador agregar usuario -------*/

		public function paginador_usuario_controlador($pagina, $registros, $id, $url, $busqueda){

			$pagina=mainModel::limpiar_cadena($pagina);
			$registros=mainModel::limpiar_cadena($registros);
			$id=mainModel::limpiar_cadena($id);

			$url=mainModel::limpiar_cadena($url);
			$url=SERVERURL.$url."/";

			$busqueda=mainModel::limpiar_cadena($busqueda);
			$tabla="";

			$pagina = (isset($pagina) && $pagina>0) ? (int) $pagina : 1;
			$inicio =($pagina > 0) ?  (($pagina*$registros)-$registros) : 0;

			if(isset($busqueda) && $busqueda != ""){

				$consulta="SELECT SQL_CALC_FOUND_ROWS * FROM usuario WHERE ((Idusuario != '$id') AND Estado = 'A' AND (Dni LIKE '%$busqueda%')) LIMIT $inicio,$registros";

			}else{

				$consulta="SELECT SQL_CALC_FOUND_ROWS * FROM usuario WHERE Idusuario != '$id' AND Estado ='A' LIMIT $inicio,$registros";

			}


			$conexion = mainModel::conectar();

			$datos = $conexion->query($consulta);
			$datos = $datos->fetchAll();

			$total = $conexion->query("SELECT FOUND_ROWS()");
			$total = (int) $total->fetchColumn();

			$Npaginas = ceil($total/$registros);

			$tabla.='<div class="table-responsive">
						<table class="table table-dark table-sm">
							<thead>
								<tr class="text-center roboto-medium">
									<th>#</th>
									<th>DNI</th>
									<th>NOMBRE</th>
									<th>USUARIO</th>
									<th>TIPO USUARIO</th>
									<th>CELULAR</th>
									<th>ACTUALIZAR</th>
									<th>ELIMINAR</th>
								</tr>
							</thead>
						<tbody>';

			if($total >= 1 && $pagina <= $Npaginas){

				$contador = $inicio+1;
				$reg_inicio = $inicio+1;

				foreach ($datos as $rows) {
					$tabla.='<tr class="text-center" >
								<td>'.$contador.'</td>
								<td>'.$rows['Dni'].'</td>
								<td>'.$rows['Nombre'].' '.$rows['Apellidos'].'</td>
								<td>'.$rows['NomUsuario'].'</td>
								<td>'.$rows['TipoUsuario'].'</td>
								<td>'.$rows['Celular'].'</td>
								<td>
									<a href="'.SERVERURL.'usuario-update/'.mainModel::encryption($rows['IdUsuario']).'/" class="btn btn-success">
											<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form class="FormularioAjax" action="'. SERVERURL.'ajax/usuarioAjax.php" method="POST" data-form="delete" autocomplete="off">

										<input type="hidden" name="usuario_id_del" value="'.mainModel::encryption($rows['IdUsuario']).'">

										<button type="submit" class="btn btn-warning">
												<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>';

							$contador++;
				}

				$reg_final= $contador-1;

			}else{

				if($total >= 1){
					$tabla.='<tr class="text-center" ><td colspan="9">

					<a href="'.$url.'" class="btn btn-raised btn-primary btn-sm">Haga clic acá para recargar el listado</a>

					</td></tr>';
				}else{
					$tabla.='<tr class="text-center" ><td colspan="9">No hay registros en el sistema</td></tr>';
				}	
			}
			$tabla.= '</tbody></table></div>';


			if($total >= 1 && $pagina <= $Npaginas){
				$tabla.='<p class="text-right">Mostrando usuario '.$reg_inicio.' al '.$reg_final.' de un total de '.$total.'</p>';

				$tabla.=mainModel::paginador_tablas($pagina, $Npaginas, $url, 5);
			}

			return $tabla;

		} /* Fin controlador */



		/* --------- Controlador eliminar usuario -------*/
		public function eliminar_usuario_controlador(){
			$id=mainModel::decryption($_POST['usuario_id_del']);
			$id=mainModel::limpiar_cadena($id);

			$eliminar_usuario=usuarioModelo::eliminar_usuario_modelo($id);
			if($eliminar_usuario->rowCount()==1){

				$alerta=[
					"Alerta"=>"recargar",
					"Titulo"=>"usuario eliminado",
					"Texto"=>"El usuario ha sido eliminado",
					"Tipo"=>"success"
				];

			}else{

				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>"usuario registrado",
					"Texto"=>"No hemos podido eliminar al usuario",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);


		}/* Fin controlador */
	

		/* --------- Controlador de  datos usuario -------*/
		public function datos_usuario_controlador($tipo, $id){

			$tipo=mainModel::limpiar_cadena($tipo);
			$id=mainModel::decryption($id);
			$id=mainModel::limpiar_cadena($id);

			return usuarioModelo::datos_usuario_modelo($tipo, $id);

		}/* Fin controlador */

	}