<?php

require_once("controllers/controller_productos.php");
?>

<h1>EDITAR USUARIO</h1>

	<table>
		<thead>
			<tr>
				
			</tr>
		</thead>
		<tbody>
<?php 
			foreach($actualiza as $actual){ ?>
<form name="form1" method="post" action="<?php echo  $_SERVER['PHP_SELF']; ?>">

		<p class="importante">
	          <span class="icon-warning"> </span>
	            Importante: 	
				 Para que la imagen pueda ser visualizada de forma correcta no deberá de rebasar los 600 x 400 pixeles de ancho y alto.<br>
				-- 	La imagen deberá de ser cargada en formato ligero <b>.JPG</b> --
						
	    </p><br>

	    			
	<form method="post" id="formdata" name="formdata" enctype="multipart/form-data">
	              	<div class="inputPanel">
                    <div id="err1"></div>
	                  <label for="Empresa">Código:</label>
	                  <input type="text" name="codigo" value="<?php echo $actual['Codigo']; ?>" class="camposem" data-error="#err1" maxlength="20" autofocus="" >
                  </div>  
                   <div class="inputPanel">
                    <div id="err2"></div>
	                  <label for="dirección">Nombre:</label>
	                  <input type="text" name="nombre" value="<?php echo $actual['Nombre']; ?>" class="campos" data-error="#err2" maxlength="25">
					        </div>
                   	
                   	<hr />

		                <div class="inputTable1">
                      <div id="err4"></div>
		                  <label for="unidad">Unidad:</label>
		                  <input type="text" name="unidad" value="<?php echo $actual['Unidad']; ?>" data-error="#err4" class="camposrfc" maxlength="8" id="mayuscula">
		                </div><br>

		                <div class="inputTable1">
                      <div id="err4"></div>
		                  <label for="unidad">Minimo:</label>
		                  <input type="text" name="unidad" value="<?php echo $actual['Min']; ?>" data-error="#err4" class="camposrfc" maxlength="8" id="mayuscula">
		                </div><br>

		                <div class="inputTable1">
                      <div id="err4"></div>
		                  <label for="unidad">Máximo:</label>
		                  <input type="text" name="unidad" value="<?php echo $actual['Max']; ?>" data-error="#err4" class="camposrfc" maxlength="8" id="mayuscula">
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

                  	
	            	<hr />
	            	<!-- <div class="inputPanel">
                      <div id="err6"></div>
                  		<label for="descripcion" class="comentario">Descripción:</label>
                  		<textarea name="descripcion"  data-error="#err6" maxlength="35" class="campos"></textarea>
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
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="guardar" value="Actualizar" name="submit">
        </form>
<?php } ?>
		</tbody>
	</table>


