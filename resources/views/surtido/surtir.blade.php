  <!-- VISTA PARA LA BUSQUEDA DE DIRECCIONES DE LOS CLIENTES  -->
<div class="modal fade" id="surtido" tabindex="-1" role="dialog" aria-labelledby="surtido" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
      <h4 class="modal-title custom_align" id="Heading">Surtido de Requisición</h4>
      </div>
        <div class="modal-body">
            <div class="form-group col-lg-2">
              <label>Folio</label>
              <input class="form-control" readonly>
            </div>
            <div class="form-group col-lg-6">
              <label>Cliente</label>
              <input class="form-control" readonly>
            </div>
            <div class="form-group col-lg-4">
              <label>Prioridad</label>
              <input class="form-control" readonly>
            </div>
            <!-- CODIGO POSTAL -->
             <div class="form-group col-lg-4">
              <label>Código Postal</label>
              <input class="form-control" readonly>
            </div>
            <!--COLONIA -->
            <div class="form-group col-lg-6">
              <label>Colonia</label>
              <input class="form-control" readonly>
            </div>
            <!-- NUMERO INTERIOR -->
            <div class="form-group col-lg-4">
              <label>Municipio/Provincia</label>
              <input class="form-control" readonly>
            </div>
         <!--Pais -->
            <div class="form-group col-lg-4">
              <label>País</label>
              <input class="form-control" readonly>
            </div>
            <!--Numero -->
            <div class="form-group col-lg-4">
              <label>Número</label>
              <input class="form-control" readonly>
            </div>
            <div class="form-group col-lg-10">
              <span>Lotes a surtir</span>
            </div>
             <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>ID Lote</th>
                       <th>ID Prod.</th> 
                        <th>Descripción</th>
                        <th>Bodega</th>
                        <th>Ubicación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="activate">
                     
                        <td>1</td>
                        <td>2</td>
                        <td>Tomate Bola</td>
                        <td>Asia</td>
                        <td>1A</td>
                    </tr>
                  
                </tbody>
            </table>
              
                <div class="modal-footer ">
                  <button type="button" class="btn btn-success" data-dismiss="modal" style="width: 30%;" >Generar Surtido</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 30%;" >Cerrar</button>
                </div>
              </div>
         
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  
