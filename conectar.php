<?php
$usuario = "igayfczlzayfru";
$password = "f8b0fe36a6edab402cb901587b411213cc79482005acf0034bce2cb529b16ad1";
$dbname = "ddp7f2ofc7vt8i";

try {
	$conn = new PDO('mysql:host=ec2-18-206-84-251.compute-1.amazonaws.com;dbname='.$dbname, $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Conexion satisfactoria";
} catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
	die();
}
?>