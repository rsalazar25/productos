<?php 
	//Archivo intermediario entre la vista y el modelo
	require("models/model_stock.php");


	//Mando a llamar al constructor de la clase categorias modelo, en la instancia
	$stock=new Stock_modelo();
	//Creo una variable para que me devuelva el array con todos los productos
	$registros_stock=$stock->get_stock();



?>