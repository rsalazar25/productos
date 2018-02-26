
<?php
require_once("controllers/controller_productos.php"); 
?>
       <h1>PRODUCTOS</h1>

	<form method="post" id="formdata" name="formdata" enctype="multipart/form-data">
	              	<div class="inputPanel">
                    <div id="err1"></div>
	                  <label for="Empresa">Código:</label>
	                  <input type="text" name="codigo" class="camposem" data-error="#err1" maxlength="20" autofocus="" required>
                  </div>  
                   <div class="inputPanel">
                    <div id="err2"></div>
	                  <label for="dirección">Nombre:</label>
	                  <input type="text" name="nombre" class="campos" data-error="#err2" maxlength="25">
					        </div>
                   	
                   	<hr />

		                <div class="inputTable1">
                      <div id="err4"></div>
		                  <label for="unidad">Unidad:</label>
		                  <input type="text" name="unidad" data-error="#err4" class="camposrfc" maxlength="8" id="mayuscula">
		                </div><br>
		                <div class="inputTableext">
		                  <!-- <label for="cantidad">Cantidad:</label>
		                  <input type="text" name="cantidad" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" class="campoe" maxlength="4"> -->
                      <label for="unidad">Categorias:</label>
                      <select name="categorias" id="">
                          <option value="">-- Selecciona Categoria --</option>
                        <?php 
                          require_once("controllers/controller_categorias.php");
                          foreach($registros_c as $categos){ ?> 
                              <option value="<?php echo $categos['IdCategoria']; ?>"><?php echo $categos['Categoria']; ?></option>
                          <?php } ?>
                      </select>
		                </div>
				    <hr />
				  	       <div class="inputPanel">  
                      <div id="err5"></div>
                  		<label for="puesto">Minimo:</label>
                  		<input type="text" name="minimo" data-error="#err5" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" class="minimo" id="min" maxlength="3" style="width:60px !important;">
                  	</div>

                    <div class="inputPanel">  
                      <div id="err5"></div>
                      <label for="puesto">Máximo:</label>
                      <input type="text" name="maximo" data-error="#err5" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" class="minimo" id="min" maxlength="3" style="width:60px !important;">
                    </div>
                  	
	            	<hr />
	            	<!--  <div class="inputPanel">
                      <div id="err6"></div>
                  		<label for="descripcion" class="comentario">Descripción:</label>
                  		<textarea name="descripcion" data-error="#err6" maxlength="35" class="campos"></textarea>
              		</div> -->
              		<div class="inputPanel">
                  		<label for="activo">Activo:</label>
                  		<input type="checkbox" name="activo" class="check" value="1" checked>
                	  	<input type="hidden" name="tabla" value="in_productos">
              		</div>
              		<div class="inputPanel">
              			<label for="Foto1">Foto 1</label>
                		<input type="file" name="fotoportada" class="foto"><br /><br>
                		<label for="Foto2">Foto 2</label>
                		<input type="file" name="archivo" class="foto"><br><br>
              		</div>
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="guardar" value="Guardar" name="submit">
        </form>
	<div id="buttons"></div>          
               <table id="example" class="table table-hover table-striped table-bordered">
        <thead>
			<tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Min</th>
                <th>Max</th>
                <th>Acciones</th>
            </tr>
		</thead>

		<tfoot>
			<tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Min</th>
                <th>Max</th>
                <th>Acciones</th>
            </tr>
		</tfoot>
		<tbody>
	
			<?php
			//Recorró el array con un foreach
			foreach($registros as $reg){ ?>
		<form name="form1" method="post" action="<?php echo  $_SERVER['PHP_SELF']; ?>">
			<tr>
				<td><?php echo $reg['Codigo']; ?></td>
				<td><?php echo $reg['Nombre']; ?></td>
				<td><?php echo $reg['Unidad']; ?></td>
        <td><?php echo $reg['Categoria']; ?></td>
				<td><?php echo $reg['Cantidad']; ?></td>
				<td><?php echo $reg['Precio']; ?></td>
				<td><?php echo $reg['Min']; ?></td>
				<td><?php echo $reg['Max']; ?></td>
				<td><a href="index.php?IdProducto=<?php echo $reg['IdProducto']; ?>&action=delete">delete</a><br>
					<a href="?IdProducto=<?php echo $reg['IdProducto']; ?>&action=editar">Actualizar</a></td>
			</tr>
		</form>
			<?php } ?> 


		</tbody>
	</table>
</a>
