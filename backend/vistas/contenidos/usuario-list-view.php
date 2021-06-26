<?php 

	if($_SESSION['tipoUsuario_spm'] != "Admin"){ 

		echo $lc->forzar_cierre_sesions_controlador();
		exit();
	}

?>


<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
	</h3>

</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="<?php echo SERVERURL; ?>usuario-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
		</li>
		<li>
			<a class="active" href="<?php echo SERVERURL; ?>usuario-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
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

		echo $ins_usuario->paginador_usuario_controlador($pagina[1], 10, $_SESSION['id_spm'], $pagina[0], "");

	?>		
		
</div>