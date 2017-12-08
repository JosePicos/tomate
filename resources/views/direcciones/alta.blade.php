  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->

  <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="nuevo" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">ALTA DIRECCIÓN</h4>
        </div>
        <div class="modal-body">
          <form action= "{{ route('Producto.store')}}" method="POST">
            {{ csrf_field() }} 
            <div class="form-group"> 
              <div class="form-group col-lg-6">
                <label>Código Postal</label>
                <input type="text" class="form-control" required autofocus="hidden" autocomplete>
              </div>
              <div class="form-group col-lg-6">
                <label>País</label>
                <select class="form-control">
                  <option value="" >Mexico</option>
                  <option>Alemania</option>
                </select>
              </div>
              <div class="form-group col-lg-6">
                <label>Estado/Provincia</label>
                <input type="text" class="form-control" >
              </div>
              <div class="form-group col-lg-6">
                <label>Municipio</label>
                <input type="text" class="form-control" >
              </div>
              <div class="form-group col-lg-8">
                <label>Colonia</label>
                <input type="text" class="form-control" >
              </div>
              <div class="form-group col-lg-6">
                <label>Calle</label>
                <input type="text" class="form-control" >
              </div>
              <div class="form-group col-lg-6">
                <label>Número</label>
                <input type="text" class="form-control" >
              </div>  
            </div>
               <div class="modal-footer ">
                <button type="submit" class="btn btn-success form-group col-lg-6 " style="width: 30%;" >Guardar</button>
                <button type="button" class="btn btn-danger form-group col-lg-6" data-dismiss="modal" style="width: 30%;" >Cerrar</button>
              </div>
          </form>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  </div>
