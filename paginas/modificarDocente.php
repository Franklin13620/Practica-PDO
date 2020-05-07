<?php
require("conectar.php");
if (isset($_GET['id_doc'])) {
    try {
        $dato = $_GET['id_doc'];
        $sql = $conn->query("select * from docentes where id_doc like '%$dato%'");
        $row_count = $sql->rowCount();
        if ($row_count) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            // Para obtener el seleted 
            $obtenerSelectd = $row['titulo_doc'];
            $obtenerSelectdGenero = $row['genero_doc'];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
} else {
    echo '
        <script type="text/javascript">
            alert("Error con el docente que desea consultar.\nUsted sera redirecionado.");
            window.location="datosDocentes.php";
        </script>;';
}
include "cabecera.php";
include "menu.php";
?>
<div class="alert alert-danger" role="alert" style="text-align: center;">
    Estas seguro de modificar a <?php echo (isset($row['nombre_doc'])) ? $row['nombre_doc'] . ' ' . $row['apellido_doc'] . '?' : ''; ?>
</div>
<!-- Aqui va el formulario -->
<button class="btn btn-secondary active mt-1" data-toggle="modal" data-target="#Modificar">Modificar Docente</button>
<hr>
<input type="button" class="btn btn-success" onclick="location.href='datosDocentes.php'" name="Volver" value="❮ Volver ">
<!-- Modal -->
<div class="modal fade" id="Modificar" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar datos a <?php echo $row['nombre_doc'] . ' ' . $row['apellido_doc']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre_doc" value="<?php echo (isset($row['nombre_doc'])) ? $row['nombre_doc'] : ''; ?>" placeholder="Nombre..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="apellido_doc" value="<?php echo (isset($row['apellido_doc'])) ? $row['apellido_doc'] : ''; ?>" placeholder="Apellido..." required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Codigo</label>
                            <!-- Se desactiva el input de id, porque se supone que ese codigo del docentes no puede cambiar ni se modificado, osea es unico
                             Tampoco hace insercion de id a base de datos por si logra cambiar el usuario el atributo disabled en inspecionar elemento-->
                            <input type="text" class="form-control" name="id_doc" value="<?php echo (isset($row['id_doc'])) ? $row['id_doc'] : ''; ?>" disabled>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputState">Profesion</label>
                            <select id="inputState" class="form-control" name="titulo_doc" required>
                                <option value="">Selecione...</option>
                                <option value="Ing. en Sistemas" <?php if ($obtenerSelectd == 'Ing. en Sistemas') echo 'selected'; ?>>Ing. Sistemas</option>
                                <option value="Ing. Electrico" <?php if ($obtenerSelectd == 'Ing. Electrico') echo 'selected'; ?>>Ing. Electrico</option>
                                <option value="Lic. en Medicina" <?php if ($obtenerSelectd == 'Lic. en Medicina') echo 'selected'; ?>>Lic. Medicina</option>
                                <option value="Lic. en Administracion de Empresas" <?php if ($obtenerSelectd == 'Lic. en Administracion de Empresas') echo 'selected'; ?>>Lic. Administración de Empresas</option>
                                <option value="Lic. en Contaduria Publica" <?php if ($obtenerSelectd == 'Lic. en Contaduria Publica') echo 'selected'; ?>>Lic. Contaduría Pública</option>
                                <option value="Lic en Matematicas" <?php if ($obtenerSelectd == 'Lic en Matematicas') echo 'selected'; ?>>Lic Matematicas</option>
                                <option value="Lic en Idioma Ingles" <?php if ($obtenerSelectd == 'Lic en Idioma Ingles') echo 'selected'; ?>>Lic. Inglés</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="telefono_doc" onkeydown="limitarCaracter(this,8);" onkeyup="limitarCaracter(this,8);" value="<?php echo (isset($row['telefono_doc'])) ? $row['telefono_doc'] : ''; ?>" placeholder="Telefono..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Direccion</label>
                        <input type="text" class="form-control" name="direccion_doc" value="<?php echo (isset($row['direccion_doc'])) ? $row['direccion_doc'] : ''; ?>" placeholder="1234 San Miguel SM" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad_doc" value="<?php echo (isset($row['ciudad_doc'])) ? $row['ciudad_doc'] : ''; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Genero</label>
                            <select id="inputState" class="form-control" name="genero_doc" required>
                                <option value="">Selecione...</option>
                                <option value="Masculino" <?php if ($obtenerSelectdGenero == 'Masculino') echo 'selected'; ?>>Masculino</option>
                                <option value="Femenino" <?php if ($obtenerSelectdGenero == 'Femenino') echo 'selected'; ?>>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary active mt-1"> Modificar </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- fin ventana modal -->
<!-- Guardar los datos -->
<?php
include "piedepagina.php";
include("conectar.php");
if ($_POST) {
    try {
        if (isset($_GET['id_doc'])) {
            $sql = $conn->exec("UPDATE docentes SET nombre_doc='" . $_POST['nombre_doc'] . "',apellido_doc='" . $_POST['apellido_doc'] . "'
            ,titulo_doc='" . $_POST['titulo_doc'] . "',telefono_doc='" . $_POST['telefono_doc'] . "',direccion_doc='" . $_POST['direccion_doc'] . "'
            ,ciudad_doc='" . $_POST['ciudad_doc'] . "',genero_doc='" . $_POST['genero_doc'] . "' WHERE id_doc='" . $row['id_doc'] . " ' ");
            //Redireccionar despues de la actulizacion a datosDocente.php
            echo '
            <script type="text/javascript">
                window.location="datosDocentes.php";
            </script>;
            } ';
        } else {
            // Pronto sera cambiada por una Venta Modal
            echo '
            <script type="text/javascript">
                alert("Los cambios no pudieron realizarse.");
            </script> ';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>