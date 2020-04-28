<?php
	require ("conectar.php");
	try {
		if($_GET){
			$id = $_GET['id_doc'];
			$stmt=$conn->prepare("delete from docentes where id_doc=:id");
			$stmt->bindValue(':id',$id,PDO::PARAM_STR);
			$stmt->execute();
			$row_count = $stmt->rowCount();
			echo "<script>location.replace('datosDocentes.php?id_doc=".$id."')</script>";
		}
	} catch(PDOException $e) {
		echo "Error: ".$e->getMessage();
	}
	$conn = null;
 ?>