<?php 
	require_once("controllers/controller_categorias.php")
?>
  <h1>CATEGORÍAS</h1>
	<form method="POST" id="formdata" action="#" name="formulariocategoria">
              <div class="inputPanel">
                  <div id="err1"></div>
                  <label for="Catalogo">Categoría:</label>
                  <input type="text" name="categoria" id="categoria" data-error="#err1" class="camposem"  maxlength="20" autofocus="" required="">
            </div>

            <hr />
              <div class="inputPanel">
                  <div id="err2"></div>
                  <label for="descripcion" class="comentario">Descripción:</label>
                  <textarea name="descripcion" data-error="#err2" maxlength="30" class="campos"></textarea>
              </div>
              <div class="inputPanel">
                  <label for="activo">Activo:</label>
                  <input type="checkbox" name="activo" class="check" value="1" checked>
              </div>

              <hr />
               <input type="hidden" name="tabla" value="in_categoria">
               <input type="submit" name="insertar" value="insertar">
          </form>
	<table id="example" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Categorías</th>
				<th>Descripción</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>Categorías</th>
				<th>Descripción</th>
				<th>Acciones</th>
			</tr>
		</tfoot>

		<tbody>
			
			<?php
			//Recorró el array con un foreach
			foreach($registros_c as $registro_c){ ?>
			<tr>
				<td><?php echo $registro_c['Categoria']; ?></td>
				<td><?php echo $registro_c['Descripcion']; ?></td>
				<td><a href="index.php?IdCategoria=<?php echo $registro_c['IdCategoria']; ?>&action=delete">delete</a>
					<a href="?IdCategoria=<?php echo $registro_c['IdCategoria']; ?>&action=editar_categorias">Actualizar</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
