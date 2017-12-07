@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Dirección E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label">DIRECCIÓN</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">País</label>
                            <div class="col-md-6 control-label">
                                <select class="form-control">
                                    <option value="" >México</option>
                                    <option>España</option>
                                </select>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Código Postal</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Estado/provincia</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Municipio</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Colonia</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Calle</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Número</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
