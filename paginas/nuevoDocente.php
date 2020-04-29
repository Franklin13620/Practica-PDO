<?php
  echo "
  <script>
      function limitarCaracter(element, numero_de_Caracter) {
      var max_chars = numero_de_Caracter;
      if(element.value.length > max_chars) {
          element.value = element.value.substr(0, max_chars);
      }
  }
    function Mayusculas(letra) {
        letra.value = letra.value.toUpperCase();
    }
  </script>
  ";
?>
<!-- Modal -->
<div class="modal fade" id="insertarNuevoDoncente" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Docente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Nuevo form -->
                    <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre_doc" placeholder="Nombre..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="apellido_doc" id="" placeholder="Apellido..." required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Codigo</label>
                            <input type="text" class="form-control" name="id_doc" onkeypress="Mayusculas(this);" onkeydown="limitarCaracter(this,10);" onkeyup="limitarCaracter(this,10);" placeholder="Codigo..." required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Profesion</label>
                            <select id="inputState" class="form-control" name="titulo_doc" required>
                                <option value="">Selecione...</option>
                                <option value="Ing. en Sistemas">Ing. Sistemas</option>
                                <option value="Ing. Electrico">Ing. Electrico</option>
                                <option value="Lic. en Medicina">Lic. en Medicina</option>
                                <option value="Lic. en Administracion de Empresas">Lic. en Administración de Empresas</option>
                                <option value="Lic. en Contaduria Publica">Lic. en Contaduría Pública</option>
                                <option value="Lic en Matematicas">Lic en Matematicas</option>
                                <option value="Lic en Idioma Ingles">Lic en Idioma Inglés</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="telefono_doc" onkeydown="limitarCaracter(this,8);" onkeyup="limitarCaracter(this,8);" placeholder="Telefono..." required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Direccion</label>
                        <input type="text" class="form-control" name="direccion_doc" placeholder="1234 San Miguel SM" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad_doc" required>
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Genero</label>
                        <select id="inputState" class="form-control" name="genero_doc" required>
                            <option value="">Selecione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-secondary active mt-1"> Registrar </button>
                        </div>
                    </form>
        </div> 
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
 </div>
</div>