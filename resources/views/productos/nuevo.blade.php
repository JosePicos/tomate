  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->

  <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="nuevo" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">NUEVO PRODUCTO</h4>
        </div>
        <div class="modal-body">
          <form action= "{{ route('Producto.store')}}" method="POST">
            {{ csrf_field() }} 
            <div class="form-group"> 
            <!-- FECHA NO EDITABLE -->
              <div class="form-group col-lg-6">
                <label>Descripción</label>
                <input id="descripcionNuevo" name="descripcion" type="text" name="" class="form-control" value="" required autofocus="hidden" autocomplete>
              </div>
              <div class="form-group col-lg-4">
                <label>Dias de madurez</label>
                <input name="dias_madurez" type="number" name="" class="form-control" value="" required>
              </div>        
              <div class="modal-footer ">
                <button type="submit" class="btn btn-primary " style="width: 30%;" >Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 30%;" >Cerrar</button>
              </div>
            </div>
          </form>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  </div>
