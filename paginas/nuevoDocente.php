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
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="id_doc" placeholder="Codigo del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre_doc" placeholder="Nombre del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="apellido_doc" placeholder="Apellido del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="titulo_doc" placeholder="Titulo del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" id='form2' class="form-control" name="telefono_doc" placeholder="Telefono del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccion_doc" placeholder="Direccion del docente..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ciudad_doc" placeholder="Ciudad del docente..." required>
                        </div>
                        <select class="custom-select" name="genro" required>
                            <option value="">-SELECIONE GENERO-</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <div class="form-group">
                        <!-- class="fa fa-angle-right" -->
                            <button type="submit" class="btn btn-secondary active mt-1"><i class="fa fa-save"></i> Registrar </button>
                        </div>
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
 </div>
</div>