<?php
require ("conectar.php");
    if(isset($_GET['id_doc'])){
        try{
            $dato = $_GET['id_doc'];
            $sql = $conn->query("select * from docentes where id_doc like '%$dato%'");
            $row_count = $sql->rowCount();
            if($row_count){
                $row = $sql->fetch(PDO::FETCH_ASSOC);
            }
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
        $conn = null;
    }
include "cabecera.php";
include "menu.php";
?>
<div class="alert alert-danger" role="alert" style="text-align: center;">
  Estas seguro de modificar a <?php echo (isset($row['nombre_doc']))?$row['nombre_doc'].' '.$row['apellido_doc'].'?':''; ?>
</div>
    <!-- Aqui va el formulario -->
    <button class="btn btn-secondary active mt-1" data-toggle="modal" data-target="#Modificar">Modificar Docente</button>
<hr>
    <input type="button" class="btn btn-success" onclick="location.href='datosDocentes.php'" name="Volver" value="Volver a la consulta de datos">
<!-- Aqui ponemos la ventana modal -->
<!-- Modal -->
        <div class="modal fade" id="Modificar" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">Código:
                                <input type="text" class="form-control" name="id_doc" value="<?php echo (isset($row['id_doc']))?$row['id_doc']:''; ?>" >
                            </div>
                        <div class="form-group">Nombre:<input type="text" class="form-control" name="nombre_doc" value="<?php echo (isset($row['nombre_doc']))?$row['nombre_doc']:''; ?>">
                        </div>
                    <div class="form-group">Apellido:<input type="text" class="form-control" name="apellido_doc" value="<?php echo (isset($row['apellido_doc']))?$row['apellido_doc']:''; ?>">
                    </div>
                    <div class="form-group">Titulo:<input type="text" class="form-control" name="titulo_doc" value="<?php echo (isset($row['titulo_doc']))?$row['titulo_doc']:''; ?>">
                    </div>
                    <div class="form-group">Telefono:<input type="number" class="form-control" name="telefono_doc" value="<?php echo (isset($row['telefono_doc']))?$row['telefono_doc']:''; ?>">
                    </div>
                    <div class="form-group">Direcci&oacute;n:<input type="text" class="form-control" name="direccion_doc" value="<?php echo (isset($row['direccion_doc']))?$row['direccion_doc']:''; ?>">
                    </div>
                    <div class="form-group">Ciudad:<input type="text" class="form-control" name="ciudad_doc" value="<?php echo (isset($row['ciudad_doc']))?$row['ciudad_doc']:''; ?>">
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary active"> Guardar el registro </button>
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
include ("conectar.php");
if($_POST) {
    try {
        if(isset($_POST['id_doc'])){
            $sql = $conn->exec("UPDATE docentes SET nombre_doc='".$_POST['nombre_doc']."',apellido_doc='".$_POST['apellido_doc']."',titulo_doc='".$_POST['titulo_doc']."'
            ,telefono_doc='".$_POST['telefono_doc']."',direccion_doc='".$_POST['direccion_doc']."',ciudad_doc='".$_POST['ciudad_doc']."' WHERE id_doc='".$_POST['id_doc']." ' ");
        }
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}
?>