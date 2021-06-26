<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CATEGORÍA
	</h3>

</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a class="active" href="<?php echo SERVERURL; ?>categoria-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CATEGORÍA</a>
		</li>
		<li>
			<a href="<?php echo SERVERURL; ?>categoria-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CATEGORÍAS</a>
		</li>
		<li>
			<a href="<?php echo SERVERURL; ?>categoria-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CATEGORÍA</a>
		</li>
	</ul>	
</div>

<div class="container-fluid">
	<form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/categoriaAjax.php" method="POST" data-form="save" autocomplete="off">
		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Información de la Categoría</legend>
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_nombre" class="bmd-label-floating">Nombre</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="categoria_nombre_reg" id="item_nombre" maxlength="300">
						</div>
					</div>

		
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
			<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
			&nbsp; &nbsp;
			<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
		</p>
	</form>
</div>