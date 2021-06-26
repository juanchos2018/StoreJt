<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PROMOCIONES
    </h3>
</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="<?php echo SERVERURL; ?>promocion-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PROMOCIÓN</a>
        </li>
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>promocion-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PROMOCIÓN</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>promocion-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PROMOCIÓN</a>
        </li>
    </ul>
</div>

<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>#</th>
                    <th>DESCRIPCIÓN</th>
                    <th>DESCUENTO</th>
                    <th>SÍMBOLO</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center" >
                    <td>1</td>
                    <td>Descuento por Navidad</td>
                    <td>10</td>
                    <td>%</td>
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