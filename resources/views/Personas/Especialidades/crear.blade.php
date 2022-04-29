@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h1>Agregar Nueva Especialidad</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ url('Especialidades') }}" method="POST">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Nombre de la Especialidad</label>
                        <input type="text" class="form-control" name="PV_NOMBRE_ESPECIALIDAD" pattern="^[\p{L} \.'\-]+$"
                        title="Solo se pueden ingresar letras" maxlength="50" required>
                    </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                </div>
            </div>
        </form>

    </div>

@stop
