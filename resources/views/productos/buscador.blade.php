  <!-- VISTA PARA LA BUSQUEDA DE DIRECCIONES DE LOS CLIENTES  -->
<div class="modal fade" id="buscarprod" tabindex="-1" role="dialog" aria-labelledby="buscarprod" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
      <h4 class="modal-title custom_align" id="Heading">Buscar Productos</h4>
      </div>
        <div class="modal-body">
             <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Dias madurez</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($productos as $producto)
                    <tr>
                      <td>{{ $producto->id }}</td>
                      <td>{{ $producto->descripcion }} </td>
                      <td>{{ $producto->dias_madurez }} </td>
                      <td><button type="button" class="btn btn-primary" onclick="agregarProducto({{ $producto }})" data-dismiss="modal">Agregar</button></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 30%;">  Cerrar
                  </button>
                </div>
              </div>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  
