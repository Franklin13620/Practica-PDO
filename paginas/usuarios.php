<?php
require ("conectar.php");
include ("cabecera.php");
include ("menu.php");
include ("aviso.php");
?>
<!doctype html>
<html lang="en">
<head>
 <script language = "JavaScript">
    function verificar(){
        pw1 = document.f1.passw.value;
        pw2 = document.f1.passw2.value;
            if(pw1!= pw2){
                $("#insertarAviso").modal();
                document.f1.passw.value = "";
                document.f1.passw2.value = "";
            }
        }
</script>
</head>
<body>
<div class="row mt-3">
    <div class="col col-md-4">
        <h3>
            Mantenimiento de Usuarios y Contraseña
        </h3>
            <form  name="f1" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" maxlength="60" size="60" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" name="passw" maxlength="60" size="60" placeholder="Ingrese su Contraseña" required>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" name="passw2" maxlength="60" size="60" value="" onblur="verificar()" placeholder="Ingrese de nuevo su Contraseña" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre_usuario" maxlength="100" size="100" placeholder="Ingrese un nombre de usuario" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="nivel" maxlength="1" size="1" placeholder="Ingrese el nivel de acceso" required>
                </div>
                <div class="form-group">
                <!-- class="fa fa-angle-right" -->
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Enviar</button>
                </div>
            </form>
        </div>
</div>
<?php
    if(isset($_POST['usuario'])){
        try{
            # esta línea solo es para ver los datos que se están enviando.
            echo $_POST['usuario']." se ha ingreado con el nombre de usuario: ".$_POST['nombre_usuario'];
            echo "<hr>";
            # ocultar la contraseña
            $oculto = md5($_POST["passw"]);
            echo "Contrasen&ntildea incriptada: [" . $oculto."]";
            $stmt = $conn->prepare("INSERT INTO
            usuarios(usuario,passw,nombre_usuario,nivel)VALUES(:us1,:us2,:us3,:us4)");
            $stmt->bindParam(':us1',$usuario);
            $stmt->bindParam(':us2',$oculto);
            $stmt->bindParam(':us3',$nombre_usuario);
            $stmt->bindParam(':us4',$nivel);
            $usuario = $_POST['usuario'];
            $passw = $_POST['passw'];
            $nombre_usuario = $_POST['nombre_usuario'];
            $nivel = $_POST['nivel'];
            $stmt->execute();
            echo "<center><div class='p-3 mb-2 bg-success text-white'>El nuevo usuario registro se guardo exitosamente.</div></center>";

        }catch(PDOException $e){
            $stmt->execute();
            echo "Error: ".$e->getMessage();
        }
    }
?>
<!-- Pie de página -->
<?php include_once "piedepagina.php"; ?>
</body>
</html>