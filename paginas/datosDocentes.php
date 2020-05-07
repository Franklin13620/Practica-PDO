<?php
include("conectar.php");
include("cabecera.php");
include("menu.php");
?>
<div class="row">
    <div class="col">
        <!--Este es el botón que carga la ventana modal insertarNuevoDoncente -->
        <button class="btn btn-secondary active mt-1" data-toggle="modal" data-target="#insertarNuevoDoncente">Nuevo Docente</button>
        <hr>
        <form action="" method="POST">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col">
                            <input class="form-control form-control-lg " placeholder="Buscar.." name="buscar">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-lg btn-secondary" name="Enviar" id="" value="Consultar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <?php require('nuevoDocente.php'); ?>
    </div>
</div>
<?php
if (isset($_POST["buscar"])) {
    try {
        $dato = $_POST["buscar"];
        $sql = $conn->query("select * from docentes where id_doc like '%$dato%'");
        $row_count = $sql->rowCount();
        if ($row_count > 0) { /* Si hay cero comlunas, no hay registros */
            echo '<span class="badge badge-danger badge-pill">' . $row_count . ' filas seleccionadas</span>';
            echo '<table class="table table-striped">';
            echo '<th colspan="2" align="center">Opciones</th>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido</th>';
            echo '<th>Titulo</th>';
            echo '<th>Telefono</th>';
            echo '<th>Direccion</th>';
            echo '<th>Ciudad</th>';
            echo '<th>Genero</th>';
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>
                    <a href="modificarDocente.php?id_doc=' . $row['id_doc'] . '"><img src="../img/modificar.png" width="20"></a></td>';
                echo '<td>
                    <a href="EliminarDocente.php?id_doc=' . $row['id_doc'] . '"><img src="../img/eliminar.png" width="20"></a></td>';
                echo '<td>' . $row['id_doc'] . '</td>';
                echo '<td>' . $row['nombre_doc'] . '</td>';
                echo '<td>' . $row['apellido_doc'] . '</td>';
                echo '<td>' . $row['titulo_doc'] . '</td>';
                echo '<td>' . $row['telefono_doc'] . '</td>';
                echo '<td>' . $row['direccion_doc'] . '</td>';
                echo '<td>' . $row['ciudad_doc'] . '</td>';
                echo '<td>' . $row['genero_doc'] . '</td>';
            }
        } else {
            echo '
                <h4> No se encontro ning&uacute;n docente registrado. </h4>
            ';
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Error " . $e->getMessage();
    }
    $conn = null;
}
include("piedepagina.php");
if (isset($_POST['id_doc'])) {
    try {
        $stmt = $conn->prepare("INSERT INTO docentes (id_doc, nombre_doc, apellido_doc, titulo_doc, telefono_doc, direccion_doc, ciudad_doc, genero_doc) 
            VALUES(:id, :nombres, :apellidos, :titu, :tel, :dire, :ciu, :gen)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':titu', $titulo);
        $stmt->bindParam(':tel', $telefono);
        $stmt->bindParam(':dire', $direcc);
        $stmt->bindParam(':ciu', $ciudad);
        $stmt->bindParam(':gen', $genero);
        $id = $_POST['id_doc'];
        $nombres = $_POST['nombre_doc'];
        $apellidos = $_POST['apellido_doc'];
        $titulo = $_POST['titulo_doc'];
        $telefono = $_POST['telefono_doc'];
        $direcc = $_POST['direccion_doc'];
        $ciudad = $_POST['ciudad_doc'];
        $genero = $_POST['genero_doc'];
        $stmt->execute();
    } catch (PDOException $e) {
        $stmt->execute();
        echo "Error: " . $e->getMessage();
    }
}
?>