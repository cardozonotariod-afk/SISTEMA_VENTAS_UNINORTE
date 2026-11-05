<div id="modalmantenimiento" class="modal fade" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">NUEVO USUARIO</h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span> -->
                </button>
            </div>

            <form action="" method="post" id="producto_form">
                <div class="modal-body pd-25">
                    <input type="hidden" id="prod_id" name="prod_id">
                    
                    <div class="form-group row col-x1-22">
                        <label class="form-control-label col-x1-6" for="">Nombre:</label>
                        <input type="text" class="form-control col-x1-6" name="prod_nom" id="prod_nom" placeholder="Ingrese su nombre" required>
                    </div>

                    <div class="form-group row col-x1-22">
                        <label class="form-control-label col-x1-6" for="">Apellido:</label>
                        <input type="text" class="form-control col-x1-6" name="prod_nom" id="prod_nom" placeholder="Ingrese su apellido" required>
                    </div>

                    <div class="form-group row col-x1-22">
                        <label class="form-control-label col-x1-6" for="">Usuario:</label>
                        <input type="text" class="form-control col-x1-6" name="prod_nom" id="prod_nom" placeholder="Ingrese su nombre de usuario" required>
                    </div>

                    <div class="form-group row col-x1-22">
                        <label class="form-control-label col-x1-6" for="">Contraseña:</label>
                        <input type="text" class="form-control col-x1-6" name="prod_nom" id="prod_nom" placeholder="Ingrese su contraseña" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-pink disabled tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Guardar</button>
                    <button type="button" class="btn btn-success disabled tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancelar</button>
                </div>

            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->