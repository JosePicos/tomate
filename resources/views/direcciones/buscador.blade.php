  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->

  <div class="modal fade" id="alta" tabindex="-1" role="dialog" aria-labelledby="alta" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">ALTA EMPLEADO</h4>
        </div>
        <div class="modal-body">
          <form action= "{{ route('Empleado.store')}}" method="POST">
            {{ csrf_field() }} 
              <div class="form-group"> 
                <!-- FECHA NO EDITABLE -->
                <div class="form-group col-lg-6">
                  <label>Nombre</label>
                  <input name="nombre" type="text" class="form-control" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Contraseña</label>
                  <input name="password" type="password" class="form-control" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Repetir contraseña</label>
                  <input name="password2" type="password" class="form-control" required>
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
