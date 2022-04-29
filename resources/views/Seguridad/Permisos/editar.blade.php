@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Editar Permiso</h1>
@stop

@section('content')
    <div class="container-fluid">

        @foreach ($permisos[0] as $permiso)
            <form action="{{ url('permisos', $permiso->COD_PERMISO) }}" method="post">
                @csrf()
                @method('PUT')


                <div class="mb-3">


                    <div class="form-group">
                        <label class="text-danger">Codigo Rol</label>
                        <input type="number" class="form-control" value="{{ $permiso->COD_ROL_USR }}" name="COD_ROL_USR"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label class="text-danger">Eliminar</label>
                        <input type="number" class="form-control" value="{{ $permiso->ELIMINAR }}" name="ELIMINAR"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Editar</label>
                        <input type="number" class="form-control" value="{{ $permiso->EDITAR }}" name="EDITAR"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Ingresar</label>
                        <input type="number" class="form-control" value="{{ $permiso->INGRESAR }}" name="INGRESAR"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger">Consultar</label>
                        <input type="number" class="form-control" value="{{ $permiso->CONSULTAR }}" name="CONSULTAR"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                    </div>


                    <div class="card-footer">
                        <input class="btn btn-primary" type="submit" value="Actualizar" />

                        <a class="btn btn-dark" href="{{ url('permisos') }}">Regresar</a>
                    </div>


                </div>

            </form>
        @endforeach

    </div>
@stop

@section('css')
@stop

@section('js')
@stop
