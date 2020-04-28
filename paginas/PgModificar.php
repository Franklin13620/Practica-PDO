<?php
	require ("conectar.php");
	include ("cabecera.php");
	if(isset($_GET['id'])) {
		try {
			$dato = $_GET['id'];
			$sql = $conn->query("select * from estudiantes where id like '%$dato%'");
			$row_count = $sql->rowCount();
			if($row_count){
				$row = $sql->fetch(PDO::FETCH_ASSOC);
			}
		} catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
		$conn = null;
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h3>Modificacion</h3>
	<form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="post">
		<div class="form-group row">
			<label for="inputNumber" class="col-sm-2 col-form-label">Codigo:</label>
				<input type="number" class="form-control" name="id" value="<?php echo (isset($row['id']))?$row['id']:''; ?>" placeholder="Introduce tu codigo..." required>
		</div>
		<div class="form-group row">
			<label for="inputText" class="col-sm-2 col-form-label">Nombre:</label>
				<input type="text" class="form-control" name="nombres" value="<?php echo (isset($row['id']))?$row['nombres']:''; ?>" placeholder="Introduce tu nombre..." required> 
		</div> 
		<div class="form-group row">
			<label for="inputText" class="col-sm-2 col-form-label">Apellido:</label>
				<input type="text" class="form-control" name="apellidos" value="<?php echo (isset($row['id']))?$row['apellidos']:''; ?>" placeholder="Introduce tu apellido..." required>
		</div>
		<center>
			<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
			<input type="button" class="btn btn-primary" name="Enviar" id="" value="   Inicio   " onClick="location.replace('inicio.php')">
		</center>
	</form>
</body>
</html>
<!-- Guardar los datos -->
<?php
	if($_POST) {
		try {
			if(isset($_POST['id'])){
				$sql = $conn->exec("UPDATE estudiantes SET nombres='".$_POST['nombres']."',apellidos='".$_POST['apellidos']."' WHERE id='".$_POST['id']." ' ");
				echo "</br>";
				echo "<center><div class='p-3 mb-2 bg-success text-white'>".$_POST['nombres']."  ".$_POST['apellidos']." se ha modicado correctamente.</div></center>";
			}
		} catch(PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}
?>