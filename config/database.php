<?php
	
	/**
	 * 
	 * Conexion a la base de datos
	 * 
	*/

	class Conectar {
		
		public static function conexion(){
			
			/*Conexion */
			$conexion = new mysqli("localhost", "root", "pass", "tiendaregalos");
			return $conexion;
			
		}
	}
?>