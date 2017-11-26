@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel-heading">
                    <h1>AGRICOLA TOMATE</h1> <br>

 
                    <h4>CONTACTO</h4><br>

                    <div class="form-group col-lg-8">
                    <label >Nombre: </label><br>
                    <input type="text" name="nombre" class="form-control"><br>
                    </div>

                    <div class="form-group col-lg-8">
                    <label>Apellido: </label><br>
                    <input type="text" name="apellido" class="form-control"><br>
                     </div>
                    <div class="form-group col-lg-8">

                    <label>Correo: </label><br>
                    <input type="text" name="correo" class="form-control"><br>
                     </div>
                    <div class="form-group col-lg-8">

                    <label>Mensaje: </label><br>
                    <input type="textarea" name="mensaje" class="form-control"><br>
                     <input type="submit" name="enviar" value="enviar" class="btn btn-default">
                     </div>

                 
                    
             </div>
                

        </div> 
    </div>
</div>
@endsection