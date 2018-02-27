<?php 
	//Archivo intermediario entre la vista y el modelo
	require("models/model_productos.php");


	//Mando a llamar al constructor de la clase categorias modelo, en la instancia
	$producto=new Productos_modelo();
	
if(!isset($_GET['IdProducto'])) {
	//Creo una variable para que me devuelva el array con todos los productos
	$registros=$producto->get_productos();
}




if(isset($_GET['IdProducto']) && $_GET['action']=='editar') {

		$actualiza=$producto->mostrar_productos($_GET['IdProducto']);

		//$update=$categoria->update_categorias($_POST['id'], $_POST['Cat'], $_POST['desc']);
	}

if (isset($_POST['update'])) {

		$update=$producto->update_productos($_POST['IdProducto'], $_POST['Codigo'], $_POST['Nombre'], $_POST['IdCategoria'], $_POST['Unidad'], $_POST['Activo'], $_POST['Min'], $_POST['Max']);
		header("location:index.php?IdProducto=".$_POST['IdProducto']."&action=editar");
	}


?>