<?php 

	require_once "./controladores/marcaControlador.php";
	$ins_marca = new marcaControlador();
	$datos_marca = $ins_marca->datos_marca_controlador();
	$campos=$datos_marca->fetchAll();

	require_once "./controladores/categoriaControlador.php";
	$ins_categoria = new categoriaControlador();
	$datos_categoria = $ins_categoria->datos_categoria_controlador();
	$campos2=$datos_categoria->fetchAll();


	require_once "./controladores/subcategoriaControlador.php";
	$ins_subcategoria = new subcategoriaControlador();
	$datos_subcategoria = $ins_subcategoria->datos_subcategoria_controlador();
	$campos3=$datos_subcategoria->fetchAll();


	require_once "./controladores/promocionControlador.php";
	$ins_promocion = new promocionControlador();
	$datos_promocion = $ins_promocion->datos_promocion_controlador();
	$campos4=$datos_promocion->fetchAll();


?>


<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO
    </h3>
</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>producto-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>producto-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTO</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>producto-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
        </li>
    </ul>
</div>

<div class="container-fluid">
	<form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/productoAjax.php" method="POST" data-form="save" autocomplete="off">

		<input type="hidden" name="usuario_id_up" value="<?php echo $_SESSION['id_spm']; ?>">


		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Información del Producto</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_nombre" class="bmd-label-floating">Nombre</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="producto_nombre_reg" id="item_nombre" maxlength="140">
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_nombre" class="bmd-label-floating">Descripción</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="producto_descripcion_reg" id="item_nombre" maxlength="300">
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_estado" class="bmd-label-floating">Categoria</label>
							<select class="form-control" name="producto_categoria_reg" id="item_estado">
								<option value="Seleccione">Seleccione</option>

								<?php foreach ($campos2 as $row) { ?>
									<option value="<?php echo $row['IdCategoria']?>"><?php echo $row['Nombre']?></option>
								<?php } ?>

							</select>
						</div>
					</div>	

					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_estado" class="bmd-label-floating">Sub categoria</label>
							<select class="form-control" name="producto_subcategoria_reg" id="item_estado">
								<option value="Seleccione">Seleccione</option>
								

								<?php foreach ($campos3 as $row) { ?>
									<option value="<?php echo $row['IdSubcategoria']?>"><?php echo $row['Nombre']?></option>
								<?php } ?>


							</select>
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_estado" class="bmd-label-floating">Marca</label>
							<select class="form-control" name="producto_marca_reg" id="item_estado">
								<option value="Seleccione">Seleccione</option>
							

								<?php foreach ($campos as $row) { ?>
									<option value="<?php echo $row['IdMarca']?>"><?php echo $row['Nombre']?></option>
								<?php } ?>


							</select>
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_estado" class="bmd-label-floating">Promocion</label>
							<select class="form-control" name="producto_promocion_reg" id="item_estado">
								<option value="Seleccione">Seleccione</option>

								<?php foreach ($campos4 as $row) { ?>
									<option value="<?php echo $row['IdPromocion']?>"><?php echo $row['Descripcion']?></option>
								<?php } ?>

								
								
							</select>
						</div>
					</div>


					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_stock" class="bmd-label-floating">Cantidad</label>
							<input type="num" pattern="[0-9]{1,9}" class="form-control" name="producto_cantidad_reg" id="item_stock" maxlength="9">
						</div>
					</div>


					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_stock" class="bmd-label-floating">Precio Compra</label>
							<input type="num" pattern="[0-9]+([\.,][0-9]+)?" class="form-control" name="producto_preciocompra_reg" id="item_stock" maxlength="9">
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_stock" class="bmd-label-floating">Precio Venta</label>
							<input type="num" pattern="[0-9]+([\.,][0-9]+)?" class="form-control" name="producto_precioventa_reg" id="item_stock" maxlength="9">
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