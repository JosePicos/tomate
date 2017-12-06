  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->

  <div class="modal fade" id="editar-{{ $producto->id }}" tabindex="-1" role="dialog" aria-labelledby="editar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">MODIFICACIÓN PRODUCTO</h4>
        </div>
        <div class="modal-body">
          <form action= "{{ route('Producto.update', $producto->id)}}" method="PUT">
            {{ csrf_field() }}
            <div class="form-group"> 
            <div class="form-group col-lg-2">
                <label>ID</label>
                <input value="{{ $producto->id }}" type="text" class="form-control" >
              </div>
              <!-- FECHA NO EDITABLE -->
              <div class="form-group col-lg-6">
                <label>Descripción</label>
                <input value="{{ $producto->descripcion }}" type="text" name="descripcion" class="form-control">
              </div>
              <div class="form-group col-lg-4">
                <label>Dias de madurez</label>
                <input value="{{ $producto->dias_madurez }}" type="number" name="dias_madurez" class="form-control">
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
