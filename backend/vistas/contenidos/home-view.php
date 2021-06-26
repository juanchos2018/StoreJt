<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fab fa-dashcube fa-fw"></i> &nbsp; MENÚ PRINCIPAL
	</h3>

</div>

<!-- Content -->
<div class="full-box tile-container">
	<a href="<?php echo SERVERURL; ?>cliente-list/" class="tile">
		<div class="tile-tittle">Clientes</div>
		<div class="tile-icon">
			<i class="fas fa-users fa-fw"></i>
			<p>5 Registrados</p>
		</div>
	</a>

	<?php 
	if($_SESSION['tipoUsuario_spm'] == "Admin"){ 
		require_once "./controladores/usuarioControlador.php";
		$ins_usuario = new usuarioControlador();
		$total_usuarios = $ins_usuario->datos_usuario_controlador("Conteo", 0);

	?>
	<a href="<?php echo SERVERURL; ?>usuario-list/" class="tile">
		<div class="tile-tittle">Usuarios</div>
		<div class="tile-icon">
			<i class="fas fa-user-secret fa-fw"></i>
			<p><?php echo $total_usuarios->rowCount(); ?> Registrados</p>
		</div>
	</a>
	<?php } ?>
	
	<a href="<?php echo SERVERURL; ?>producto-list/" class="tile">
		<div class="tile-tittle">Productos</div>
		<div class="tile-icon">
			<i class="fas fa-pallet fa-fw"></i>
			<p>9 Registrados</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>categoria-list/" class="tile">
		<div class="tile-tittle">Categoría</div>
		<div class="tile-icon">
			<i class="far fa-calendar-alt fa-fw"></i>
			<p>30 Registradas</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>subcategoria-list/" class="tile">
		<div class="tile-tittle">Sub categoría</div>
		<div class="tile-icon">
			<i class="fas fa-hand-holding-usd fa-fw"></i>
			<p>200 Registrados</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>marca-list/" class="tile">
		<div class="tile-tittle">Marca</div>
		<div class="tile-icon">
			<i class="fas fa-clipboard-list fa-fw"></i>
			<p>700 Registrados</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>promocion-list/" class="tile">
		<div class="tile-tittle">Promoción</div>
		<div class="tile-icon">
			<i class="fas fa-clipboard-list fa-fw"></i>
			<p>700 Registrados</p>
		</div>
	</a>

	<?php if($_SESSION['tipoUsuario_spm'] == "Admin"){ ?>
	<a href="<?php echo SERVERURL; ?>reservation-list.html" class="tile">
		<div class="tile-tittle">Ventas</div>
		<div class="tile-icon">
			<i class="fas fa-clipboard-list fa-fw"></i>
			<p>700 Registrados</p>
		</div>
	</a>
	<?php } ?>


</div>