<?php 
	//Archivo intermediario entre la vista y el modelo
	require("models/model_categorias.php");

	//Mando a llamar al constructor de la clase categorias modelo, en la instancia
	$categoria=new Categorias_models();
if(!isset($_GET['IdCategoria'])) {
	//Creo una variable para que me devuelva el array con todos los productos
	$registros_c=$categoria->get_categorias();

}
	
	//Inserta Categorías
	if ((isset($_POST['categoria'])) && ($_POST['categoria'] != '') && (isset($_POST['descripcion'])) && ($_POST['descripcion'] != '')){
			$insertRegistros=$categoria->set_categorias($_POST['categoria'], $_POST['descripcion']);
			header("location:index.php?action=categorias");
	}



	// Borra Categorías
	if(isset($_GET['IdCategoria']) && $_GET['action'] == 'delete' ){
		$delete=$categoria->delete_categorias($_GET['IdCategoria']);
		header("location:index.php?action=categorias");
	} 


if(isset($_GET['IdCategoria']) && $_GET['action']=='editar_categorias') {

		$actualiza=$categoria->mostrar_categorias($_GET['IdCategoria']);

		//$update=$categoria->update_categorias($_POST['id'], $_POST['Cat'], $_POST['desc']);
}

	if (isset($_POST['update'])) {

		$update=$categoria->update_categorias($_POST['id'], $_POST['cat'], $_POST['desc']);
		header("location:index.php");
	}
	

?>