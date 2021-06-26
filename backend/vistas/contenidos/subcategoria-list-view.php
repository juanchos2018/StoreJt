<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SUB CATEGORÍAS
    </h3>

</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="<?php echo SERVERURL; ?>subcategoria-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR SUB CATEGORÍA</a>
        </li>
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>subcategoria-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SUB CATEGORÍAS</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>subcategoria-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR SUB CATEGORÍA</a>
        </li>
    </ul>
</div>

<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>#</th>
                    <th>NOMBRE</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center" >
                    <td>1</td>
                    <td>Inalámbrico</td>
                    <td>
                        <a href="item-update.html" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i> 
                        </a>
                    </td>
                    <td>
                        <form action="">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                
            </tbody>
        </table>
	</div>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>