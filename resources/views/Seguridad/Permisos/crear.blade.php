@extends('adminlte::page')

@section('title', 'permisos')

@section('content_header')
    <h1>Crear permiso</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ url('permisos') }}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">

                    <div class="form-group">

                        <label class="text-danger"> * Codigo Rol Usuario</label>
                        <input type="number" class="form-control" name="COD_ROL_USR" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar numeros" maxlength="50" required>

                        <label class="text-danger">* ELIMINAR</label>
                        <input type="number" class="form-control" name="ELIMINAR" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar numeros" maxlength="50" required>

                        <label class="text-danger"> * EDITAR</label>
                        <input type="number" class="form-control" name="EDITAR" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar numeros" maxlength="50" required>

                        <label class="text-danger"> * INGRESAR</label>
                        <input type="number" class="form-control" name="INGRESAR" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar numeros" maxlength="50" required>

                        <label class="text-danger"> * CONSULTAR</label>
                        <input type="number" class="form-control" name="CONSULTAR" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>
                    </div>

                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{ url('permisos') }}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
