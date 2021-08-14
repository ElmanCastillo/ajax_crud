<?php
	
	// Creamos las variables de conexión
	$servername = "localhost";
	$username = "democrud";
	$password = "12345";
	$database = "democrud";
	// Creamos la conexion con MySQL
	$con = new mysqli($servername, $username, $password, $database);
	// Revisamos la conexión
	if ($con->connect_error) {
	  	die("Conexión fallida: " . $con->connect_error);
	}
	
?>