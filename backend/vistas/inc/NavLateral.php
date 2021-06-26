<section class="full-box nav-lateral">
	<div class="full-box nav-lateral-bg show-nav-lateral"></div>
	<div class="full-box nav-lateral-content">
		<figure class="full-box nav-lateral-avatar">
			<i class="far fa-times-circle show-nav-lateral"></i>
			<img src="<?php echo SERVERURL; ?>vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
			<figcaption class="roboto-medium text-center">
				<?php echo $_SESSION['nombre_spm']. " ".$_SESSION['apellidos_spm']; ?> <br><small class="roboto-condensed-light"> <?php echo $_SESSION['tipoUsuario_spm']; ?> </small>
			</figcaption>
		</figure>
		<div class="full-box nav-lateral-bar"></div>
		<nav class="full-box nav-lateral-menu">
			<ul>
				<li>
					<a href="<?php echo SERVERURL; ?>home/"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Menú Principal</a>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>cliente-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
						</li>
					</ul>
				</li>

				<?php if($_SESSION['tipoUsuario_spm'] == "Admin"){ ?>
				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>usuario-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>usuario-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>usuario-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
						</li>
					</ul>
				</li>
				<?php } ?>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>producto-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>producto-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>producto-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Categoría <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>categoria-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Categoría</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>categoria-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Categorías</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>categoria-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Categoría</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Sub categoría <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>subcategoria-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Sub categoría</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>subcategoria-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Sub categorías</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>subcategoria-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Sub Categoría</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Marca <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>marca-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Marca</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>marca-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Marcas</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>marca-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Marca</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Promoción <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="<?php echo SERVERURL; ?>promocion-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Promoción</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>promocion-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Promociones</a>
						</li>
						<li>
							<a href="<?php echo SERVERURL; ?>promocion-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Promoción</a>
						</li>
					</ul>
				</li>	

				<?php if($_SESSION['tipoUsuario_spm'] == "Admin"){ ?>
				<li>
					<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Venta <i class="fas fa-chevron-down"></i></a>
					<ul>
						<li>
							<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Ventas</a>
						</li>
						<li>
							<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Consultar Ventas</a>
						</li>
					</ul>
				</li>
				<?php } ?>

			</ul>
		</nav>
	</div>
</section>