@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Agregar Nuevo Rol</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ url('roles') }}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">

                    <div class="form-group">

                        <label class="text-danger"> * Rol</label>
                        <input type="text" class="form-control" name="ROL" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                    </div>

                </div>

                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{ url('roles') }}">Regresar</a>
                </div>

            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
