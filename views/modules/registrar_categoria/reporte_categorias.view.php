<table id="example" class="display nowrap" style="width:100%">

	<thead>
	
		<tr>
			<th>Código Categoria</th>
			<th>Nombre Categoria</th>
			
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($categorias as $categoria): ?>
		<tr>
			<td><?php echo $categoria->getcategoria_codigo(); ?></td>
			<td><?php echo $categoria->getnombre_categoria(); ?></td>
			
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
	<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
	<tfoot>
		<tr>
            <th>Código del Producto</th>
			<th>Nombre del Producto</th>
			
			
		</tr>
	</tfoot>
</table>





