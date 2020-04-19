<!-- Modal -->
    <div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" name="id" placeholder="Ingresar codigo..." required>
                        </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombres" placeholder="Ingresar nombre..." required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="apellidos" placeholder="Ingresar apellido..." required>
                </div>
                <div class="form-group">
                <!-- class="fa fa-angle-right" -->
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Registrar </button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
 </div>
</div>
