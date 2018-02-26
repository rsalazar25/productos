<?php 
require_once("controllers/controller_stock.php"); 
?>
  <h1>Stock</h1>

	<table id="example" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Stock en Transito</th>
				<th>Stock</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>Producto</th>
				<th>Stock en Transito</th>
				<th>Stock</th>
			</tr>
		</tfoot>

		<tbody>
			
			<?php
			//Recorró el array con un foreach
			foreach($registros_stock as $registro_s){ ?>
			<tr>
				<td><?php echo $registro_s['Nombre']; ?></td>
				<td><?php echo $registro_s['Stock_Transito']; ?></td>
				<td><?php echo $registro_s['CantidadStock']; ?></td>				
			</tr>
			<?php } ?>
		</tbody>
	</table>
