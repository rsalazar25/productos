<?php 
	// Clase de categorias
	class Productos_modelo{
		//Declaro dos variables encapsuladas privadas
		private $db; // Almaceno conexión a la base de datos
		private $productos; // Almaceno las catergorias de la tabla
		private $actual;

		public function __construct(){ // Inicia Constructor se encargara de conectar a la base de datos.
			//llamo el archivo de conexion a la base de datos
			require_once("models/conectar.php");
			// llamo al método estatico Conexion que pertenece al archivo conectar.php
			$this->db=Conectar::conexion();
			//Creo un array para almacenar los registros de la tabla categorias
			$this->productos = array();
			$this->actual = array();
		}// termina constructor


		// Creo funcion que me devuelva un listado de productos con un getter
		public function get_productos(){
			$consulta=$this->db->query("SELECT in_productos.*, in_categoria.* FROM in_productos INNER JOIN in_categoria ON in_productos.IdCategoria=in_categoria.IdCategoria");
			while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
				// Recorro los registros del array de consultas
				$this->productos[]=$row;
			}

			return $this->productos;
		}

		//funcion para insertar Productos

		public function set_productos($Codigo, $Nombre, $Unidad, $Cantidad, $Descripcion, $Precio, $Activo, $Foto1, $Foto2, $Min, $Max) {
 
        	$sql = "INSERT INTO in_productos (Codigo,Nombre, Unidad, Cantidad, Descripcion, Precio, Activo, Foto1, Foto2, Min, Max) VALUES ('$Codigo','$Nombre', '$Unidad', '$Cantidad', '$Descripcion', '$Precio', '$Activo', '$Foto1', '$Foto2', '$Min', '$Max')";
        	$result = $this->db->query($sql);
 
        	if ($result) {
        		return true;

        	} else {
            	return false;
        	}
    	}

    	public function delete_productos($IdProducto){
			$sql="DELETE FROM in_productos WHERE IdProducto='$IdProducto'";
			$result= $this->db->query($sql);

			if($result){
    			return true;
    		} else {
    			return false;
    		}
	
		}
		//Mostrar producto a editar

		public function mostrar_productos($IdProducto){
			$consulta=$this->db->query("SELECT in_productos.*, in_categoria.* FROM in_productos INNER JOIN in_categoria ON in_productos.IdCategoria=in_categoria.IdCategoria WHERE in_productos.IdProducto='$IdProducto'");
			while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
				// Recorro los registros del array de consultas
				$this->productos[]=$row;
			}

			return $this->productos;
		}

	}
?>
