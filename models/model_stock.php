<?php 
	// Clase de categorias
	class Stock_modelo{
		//Declaro dos variables encapsuladas privadas
		private $db; // Almaceno conexión a la base de datos
		private $stock; // Almaceno las catergorias de la tabla

		public function __construct(){ // Inicia Constructor se encargara de conectar a la base de datos.
			//llamo el archivo de conexion a la base de datos
			require_once("models/conectar.php");
			// llamo al método estatico Conexion que pertenece al archivo conectar.php
			$this->db=Conectar::conexion();
			//Creo un array para almacenar los registros de la tabla categorias
			$this->stock = array();
		}// termina constructor


		// Creo funcion que me devuelva un listado de productos con un getter
		public function get_stock(){
			$consulta=$this->db->query("SELECT in_Stock.*, in_productos.IdProducto, in_productos.Nombre FROM in_stock INNER JOIN in_productos ON in_productos.IdProducto = in_stock.IdStock ");
			while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
				// Recorro los registros del array de consultas
				$this->stock[]=$row;
			}

			return $this->stock;
		}

	}
?>
