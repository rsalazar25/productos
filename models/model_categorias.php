<?php 
	// Clase de categorias
	class Categorias_models{
		//Declaro dos variables encapsuladas privadas
		private $db; // Almaceno conexión a la base de datos
		private $categorias; // Almaceno las catergorias de la tabla
		private $actual;

		public function __construct(){ // Inicia Constructor se encargara de conectar a la base de datos.
			//llamo el archivo de conexion a la base de datos
			require_once("models/conectar.php");
			// llamo al método estatico Conexion que pertenece al archivo conectar.php
			$this->db=Conectar::conexion();
			//Creo un array para almacenar los registros de la tabla categorias
			$this->categorias = array();
			$this->actual = array();
		}// termina constructor


		// Creo funcion que me devuelva las categorias con un getter
		public function get_categorias(){
			$consulta=$this->db->query("SELECT * FROM in_categoria");
			while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
				// Recorro los registros del array de consultas
				$this->categorias[]=$row;
			}

			return $this->categorias;
		}

		public function set_categorias($categoria, $descripcion) {
 
        	$sql = "INSERT INTO in_categoria (Categoria, Descripcion) VALUES ('" . $categoria . "', '" . $descripcion . "')";
        	$result = $this->db->query($sql);
 
        	if ($result) {
        		return true;

        	} else {
            	return false;
        	}
    	}

    	public function delete_categorias($IdCategoria){
			$sql="DELETE FROM in_categoria WHERE IdCategoria='$IdCategoria'";
			$result= $this->db->query($sql);

			if($result){
    			return true;
    		} else {
    			return false;
    		}
	
		}

		public function update_categorias($IdCategoria, $categoria, $descripcion){

 		    $sql = "UPDATE in_categoria SET Categoria = '". $categoria ."', Descripcion = '". $descripcion ."' WHERE IdCategoria = '".$IdCategoria."' ";
    		$result= $this->db->query($sql);
    		if($result){
    			return true;
    		} else {
    			return false;
    		}

		}

		public function mostrar_categorias($IdCategoria){
			$sql=$this->db->query("SELECT * FROM in_categoria WHERE IdCategoria = '".$IdCategoria."'");
			while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				// Recorro los registros del array de consultas
				$this->categorias[]=$row;
			}

			return $this->categorias;
		}



	}
?>
