  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->
        <form action="{{ url('Producto.store') }}" method="POST">
          {{ csrf_field() }} 
          <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editar" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </button>
                  <h4 class="modal-title custom_align" id="Heading">NUEVO PRODUCTO</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                   <div class="form-group col-lg-2">
              <label>Folio</label>
              <input type="folio" name="" class="form-control" id="" value="">
            </div>
            <!-- FECHA NO EDITABLE -->
            <div class="form-group col-lg-4">
              <label>Fecha</label>
              <input type="feha" name="" class="form-control" id="" value="">
            </div>
            <div class="form-group col-lg-2">
              <label>Pioridad</label>
                <select type="uso" name="" class="form-control" id="" value="" >
                  <option value="Tacos" >Normal</option>
                  <option>Urgente</option>
                </select>
            </div>
            <!-- DIRECCION -->
            <div class="form-group col-lg-12">
              <label>Direccion</label>
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Codigo Postal</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--CALLE -->
            <div class="form-group col-lg-2">
              <label>Pais</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-2">
              <label>Estado</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!-- NUMERO INTERIOR -->
            <div class="form-group col-lg-2">
              <label>Municipio/Provincia</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <div class="form-group col-lg-1">
              <label></label>
              <button type="submit" class=" form-control btn btn-primary">Buscar</button>
            </div>
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-6">
              <label>Colonia</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--LOCALIDAD -->
            <div class="form-group col-lg-4">
              <label>Calle</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!--ESTADO -->
            <div class="form-group col-lg-2">
              <label>Numero</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
            <!-- CODIGO POSTAL -->
            <div class="form-group col-lg-2">
              <label>Producto</label>
              <input type="uso" name="" class="form-control" id="" value="">
            </div>
              </div>
            <!-- /.modal-content --> 
            </div>
          <!-- /.modal-dialog --> 
          </div>
        </form>