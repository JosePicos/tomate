  <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->
<form action="{{ url('/producto/guardar') }}" method="POST">
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
            <div class="modal-footer ">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  </div>
</form>