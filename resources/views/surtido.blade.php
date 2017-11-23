@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="container-fluid">
        <div class="col-md-12 col-md-offset dark-grey">
            <div class="panel panel-default">
                <div class="panel-heading">Surtido de Requisicion </div>
                     <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                       
                        <th>Folio</th>
                        <th>Cliente</th>
                        <th>Pais</th>
                        <th>Status</th>
                        <th class="col-check"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="danger">
                     
                        <td>1</td>
                        <td>Jose Luis Osuna</td>
                        <td>Mexico</td>
                        <td>Urgente</td>
                           <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Surtir</button></td>
                       
                    </tr>
                    <tr class="activate">
                        
                         <td>2</td>
                        <td>Elaine Osuna Picos</td>
                        <td>U.S.A.</td>
                        <td>Normal</td>
                         <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Surtir</button></td>
                      
                    </tr>
                    <tr class="activate">
                        
                        <td>3</td>
                        <td>Jose Alfredo Garcia</td>
                        <td>Mexico</td>
                        <td>Normal</td>
                        <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Surtir</button></td>
                     
                    </tr>
                    <tr class="danger">
                        
                         <td>4</td>
                        <td>Julio Cesar Gomez Beltran</td>
                        <td>España</td>
                        <td>Urgente</td>
                         <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Surtir</button></td>
                      
                    </tr>
                    <tr class="activate">
                        
                         <td>5</td>
                        <td>Paola</td>
                        <td>Francia</td>
                        <td>Normal</td>
                         <td class="col-check"><button type="submit" class=" form-control btn btn-primary">Surtir</button></td
                       
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
