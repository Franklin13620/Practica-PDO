<?php
include ('conectar.php');
include ('cabecera.php');
include ('menu.php');
?>
    <div class="row mt-5">
        <div class="col">
            <form action="" method="POST">
                <input type="text" name="buscar" id="" value="">
                <input type="submit" class="btn btn-secondary active" name="Enviar" id="" value="Enviar consulta">
                <input type="button" class="btn btn-secondary active" name="Nuevo" id="" value="Registro nuevo" onClick="location.replace('pgGuardar.php')">
                <a href="inicio.php">Volver al menu principal</a>
            </form>
        </div>
    </div>
<?php
    if (isset($_POST["buscar"])){
        try {
            $dato = $_POST["buscar"];
            $sql = $conn->query("select * from estudiantes where nombres like '%$dato%'");
            $row_count = $sql->rowCount();
            echo '<div id="caja1">
            <table>';
            echo '<th colspan="2" align="center">|Opciones</th>';
            echo '<th>|Codigo</th>';
            echo '<th>|Nombre</th>';
            echo '<th>|Apellido|</th>';
            echo '<span class="badge badge-danger badge-pill">'.$row_count.' filas seleccionadas</span>';
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
        echo '<td>|
        <a href="pgModificar.php?id='.$row['id'].'"><img
        src="./img/modificar.png" width="20"></a></td>';
        echo '<td>|
        <a href="pgEliminar.php?id='.$row['id'].'"><img
        src="./img/eliminar.png" width="20"></a></td>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['nombres'].'</td>';
        echo '<td>'.$row['apellidos'].'</td>';
        }
        echo "</table>";
    } catch (PDOException $e){
        echo "Error ".$e->getMessage();
        }
        $conn = null;
    }
//include("newQuery.php");
include ('piedepagina.php')
?>