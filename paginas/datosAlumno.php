<?php
include ("conectar.php");
include ("cabecera.php");
include ("menu.php");
?>
    <div class="row">
        <div class="col">
    <!--Este es el botón que carga la ventana modal -->
        <button  class="btn btn-secondary active mt-1" data-toggle="modal" data-target="#insertarNuevoAlumno">Nuevo Alumno</button>
    <hr>
        <form action="" method="POST">
            <input type="submit"  class="btn btn-secondary active" name="Enviar" id="" value="Consultar datos de estudiantes">
            <input type="text" name="buscar" id="" value="">
        </form>
    <hr>
<?php include ('nuevoAlumno.php'); ?>
</div>
</div>
<?php
    if(isset($_POST["buscar"])){
        try{
            $dato = $_POST["buscar"];
            $sql = $conn->query("select * from estudiantes where id like '%$dato%'");
            $row_count = $sql->rowCount();
            echo '<span class="badge badge-danger badge-pill">'.$row_count.' filas seleccionadas</span>';
            echo '<table class="table table-striped">';
            echo '<th colspan="2" align="center">Opciones</th>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido</th>';     
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
        echo '<td>
        <a href="modificarAlumno.php?id='.$row['id'].'"><img src="../img/modificar.png" width="20"></a></td>';
        echo '<td>
        <a href="pgEliminar.php?id='.$row['id'].'"><img src="../img/eliminar.png" width="20"></a></td>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['nombres'].'</td>';
        echo '<td>'.$row['apellidos'].'</td>';
        }
        echo "</table>";
        } catch(PDOException $e){
            echo "Error ".$e->getMessage();
    }
    $conn = null;
}
include ("piedepagina.php");
    if(isset($_POST['id'])){
        try{
            echo $_POST['id']." ".$_POST['nombres']." ".$_POST['apellidos'];

            $stmt = $conn->prepare("INSERT INTO
            estudiantes(id,nombres,apellidos)VALUES(:id,:nombres,:apellidos)");
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':nombres',$nombres);
            $stmt->bindParam(':apellidos',$apellidos);
            $id = $_POST['id'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $stmt->execute();
        } catch(PDOException $e) {
            $stmt->execute();
            echo "Error: ".$e->getMessage();
    }
}
?>