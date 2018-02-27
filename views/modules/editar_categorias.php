<?php 
	require_once("controllers/controller_categorias.php");
?>
  <h1>CATEGORÍAS</h1>

  <?php foreach($actualiza as $actual){ ?>
	<form method="POST" id="formdata" action="<?php echo  $_SERVER['PHP_SELF']; ?>" name="formulariocategoria">
              <div class="inputPanel">
                  <div id="err1"></div>
                  <label for="Catalogo">Categoría:</label>
                  <input type="text" name="categoria" id="categoria" value="<?php echo $actual['Categoria']; ?>" data-error="#err1" class="camposem"  maxlength="20" autofocus="" required="">
            </div>

            <hr />
              <div class="inputPanel">
                  <div id="err2"></div>
                  <label for="descripcion" class="comentario">Descripción:</label>
                  <textarea name="descripcion" data-error="#err2" maxlength="30" class="campos"><?php echo $actual['Descripcion']; ?></textarea>
              </div>
              <div class="inputPanel">
                  <label for="activo">Activo:</label>
                  <input type="checkbox" name="activo" class="check" value="1" checked>
              </div>

              <hr />
                <input type="hidden" name="IdCategoria" value="<?php echo $actual['IdCategoria']; ?>">
               <input type="submit" name="insertar" value="insertar">
          </form>
      <?php } ?>