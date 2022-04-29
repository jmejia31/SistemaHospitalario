@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Editar Roles</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($roles[0] as $rol)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('roles', $rol->COD_ROL_USR) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class="">Codigo del rol</label>
                            <input type="text" class="form-control" value="{{ $rol->COD_ROL_USR }}" name="COD_ROL_USR"
                                disabled required>
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * Rol</label>
                            <input type="text" class="form-control" value="{{ $rol->ROL }}" name="ROL"
                                pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                        </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{ url('roles') }}">Regresar</a>
                </div>
            </div>
        @endforeach
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
