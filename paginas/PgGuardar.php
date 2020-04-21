<?php
	require ("conectar.php");
	include ("cabecera.php");
?>
<!-- No se esta utilizando pagina para guardar alumnos, pronto sera eliminada -->
<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<h3 class="h3-personalizado">Nuevo Registro</h3>
		<form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="form-group row">
				<label for="inputNumber" class="col-sm-2 col-form-label">Codigo:</label>
						<input type="number" class="form-control" name="id" placeholder="Introduce tu codigo..." required>
				</div>
			<div class="form-group row">
				<label for="inputText" class="col-sm-2 col-form-label">Nombre:</label>
						<input type="text" class="form-control" name="nombres" placeholder="Introduce tu nombre..." required> 
				</div> 
			<div class="form-group row">
				<label for="inputText" class="col-sm-2 col-form-label">Apellido:</label>
					<input type="text" class="form-control" name="apellidos" placeholder="Introduce tu apellido..." required>
			</div>
			<center>
				<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
				<input type="button" class="btn btn-primary" name="Enviar" id="" value="   Inicio   " onClick="location.replace('inicio.php')">
			</center>
		</form>
	<script src="../js/jquery-3.4.1.slim.min.js" ></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js" ></script>
</body>
<!-- Guardar los datos -->
<?php
if(isset($_POST['id'])){
	try {
		$stmt = $conn->prepare("INSERT INTO estudiantes (id,nombres,apellidos) VALUES (:id,:nombres,:apellidos)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':nombres',$nombres);
		$stmt->bindParam(':apellidos',$apellidos);
		$id = $_POST['id'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$stmt->execute();
		echo $_POST['nombres']."  ".$_POST['apellidos']. " se ha a&ntilde;adido correctamente.";
		echo "<center><div class='p-3 mb-2 bg-success text-white'>El nuevo registro se guardo exitosamente.</div></center>";
		// Redireccionar a pagina de inicio despues de la insercion
		/*echo '<script 
		type="text/javascript">window.location="inicio.php";
		</script>;
		} ';*/
	}catch(PDOException $e){
		$stmt->execute();
		echo "Error: ".$e->getMessage();
	}
}
?>
</html>