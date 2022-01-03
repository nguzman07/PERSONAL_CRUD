<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="Id_Producto" name="Id_Producto">
                    
                    <div class="form-group">
                        <label class="form-label" for="Nombre_Producto">Nombre</label>
                        <input type="text" class="form-control" id="Nombre_Producto" name="Nombre_Producto" placeholder="Ingrese Nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="Descripcion_Producto">Descripcion</label>
                        <textarea row="3" class="form-control" id="Descripcion_Producto" name="Descripcion_Producto" placeholder="Ingrese Descripcion" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>