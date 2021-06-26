<?php
	if($lc->encryption($_SESSION['id_spm']) != $pagina[1]){


	}else{

	}

?>



<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR USUARIO
	</h3>

</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="<?php echo SERVERURL; ?>usuario-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
		</li>
		<li>
			<a href="<?php echo SERVERURL; ?>usuario-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
		</li>
		<li>
			<a href="<?php echo SERVERURL; ?>usuario-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
		</li>
	</ul>	
</div>

<div class="container-fluid">

	<?php 

	require_once "./controladores/usuarioControlador.php";
	$ins_usuario = new usuarioControlador();

	$datos_usuario = $ins_usuario->datos_usuario_controlador("Unico",$pagina[1]);

	if($datos_usuario->rowCount()==1){
		$campos=$datos_usuario->fetch();
	?>




	<form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/usuarioAjax.php" method="POST" data-form="update" autocomplete="off">

		<input type="hidden" name="usuario_id_up" value="<?php echo $pagina[1]; ?>">

		<fieldset>
			<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_dni" class="bmd-label-floating">DNI</label>
							<input type="text" pattern="[0-9-]{1,20}" class="form-control" name="usuario_dni_up" id="usuario_dni" maxlength="20" value="<?php echo $campos['Dni']; ?>">
						</div>
					</div>
					
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_nombre" class="bmd-label-floating">Nombres</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="usuario_nombre_up" id="usuario_nombre" maxlength="35" value="<?php echo $campos['Nombre']; ?>">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_apellido" class="bmd-label-floating">Apellidos</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="usuario_apellido_up" id="usuario_apellido" maxlength="35" value="<?php echo $campos['Apellidos']; ?>">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_telefono" class="bmd-label-floating">Celular</label>
							<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="usuario_telefono_up" id="usuario_telefono" maxlength="20" value="<?php echo $campos['Celular']; ?>">
						</div>
					</div>
		
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<fieldset>
			<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario</label>
							<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_usuario_up" id="usuario_usuario" maxlength="35" value="<?php echo $campos['NomUsuario']; ?>">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_estado" class="bmd-label-floating">Tipo Usuario</label>
							<select class="form-control" name="item_estado_reg" id="item_estado">
								<option value="" selected="" disabled="">Seleccione una opción</option>
								<option value="Admin">Admin</option>
								<option value="Empleado">Empleado</option>
							</select>
						</div>
					</div>
			
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<fieldset>
			<legend style="margin-top: 40px;"><i class="fas fa-lock"></i> &nbsp; Nueva contraseña</legend>
			<p>Para actualizar la contraseña de esta cuenta ingrese una nueva y vuelva a escribirla. En caso que no desee actualizarla debe dejar vacíos los dos campos de las contraseñas.</p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_clave_nueva_1" class="bmd-label-floating">Contraseña</label>
							<input type="password" class="form-control" name="usuario_clave_nueva_1" id="usuario_clave_nueva_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_clave_nueva_2" class="bmd-label-floating">Repetir contraseña</label>
							<input type="password" class="form-control" name="usuario_clave_nueva_2" id="usuario_clave_nueva_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
		
		<br><br><br>
		<fieldset>
			<p class="text-center">Para poder guardar los cambios en esta cuenta debe de ingresar su nombre de usuario y contraseña</p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_admin" class="bmd-label-floating">Nombre de usuario</label>
							<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_admin" id="usuario_admin" maxlength="35" required="" >
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="clave_admin" class="bmd-label-floating">Contraseña</label>
							<input type="password" class="form-control" name="clave_admin" id="clave_admin" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" >
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<p class="text-center" style="margin-top: 40px;">
			<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
		</p>
	</form>
	<?php 
		}else{
	?>
	<div class="alert alert-danger text-center" role="alert">
		<p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
		<h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
		<p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
	</div>
	<?php 
		}
	?>
</div>