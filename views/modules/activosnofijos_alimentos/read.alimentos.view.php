<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
		<hr>
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
			<a href="?c=Productos&a=registrarProductos" class="btn btn-primary">Registrar Productos</a>
		</li>
		<br>
	</ul>
</div>
<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Productos Código</th>
					<th>Nombre Producto</th>
                    <th>Nombre Categoria</th>
					<<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($producto as $producto): ?>
					<tr class="text-center">
						<td>
							<?php echo $producto->getproductos_codigo(); ?>
						</td>
						<td>
							<?php echo $producto->getnombre_producto(); ?>
						</td>
                        <td>
							<?php echo $producto->getcategoria_codigo(); ?>
						</td>
						<td>
                             <a href="" class="btn btn-success">
                                 <i class="fas fa-sync-alt"></i>
                             </a>
                         </td>
                         <td>
                             <a href="" class="btn btn-warning">
                                 <i class="far fa-trash-alt"></i>
                             </a>                             
                         </td> 
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</section>