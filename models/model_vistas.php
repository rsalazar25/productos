<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlaces){

		if($enlaces == "productos" || $enlaces == "categorias" ||  $enlaces == "editar" ||  $enlaces == "stock" || $enlaces == "editar_categorias" ){

			$module = "views/modules/".$enlaces.".php";

		}

		else if($enlaces == "index" ){

			$module = "views/modules/inicio.php";

		}

		else{

			$module = "views/modules/inicio.php";

		}

		return $module;

	}

}


?>