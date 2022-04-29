@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h1>Editar Especialidad</h1>
@stop

@section('content')
    <div class="container-fluid">

        @foreach ($infoespecialidad[0] as $especialidadresultado)
            <div class="card">
                <div class="card-body">

                    <form action="{{ url('Especialidades', $especialidadresultado->COD_ESPECIALIDAD) }}" method="POST">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class="">Código de la Especialidad</label>
                            <input type="text" class="form-control"
                                value="{{ $especialidadresultado->COD_ESPECIALIDAD }}" name="PI_COD_ESPECIALIDAD" disabled
                                required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Nombre de la Especialidad</label>
                            <input type="text" class="form-control"
                                value="{{ $especialidadresultado->NOMBRE_ESPECIALIDAD }}" name="PV_NOMBRE_ESPECIALIDAD"
                                pattern="^[\p{L} \.'\-]+$" title="Solo se pueden ingresar letras" maxlength="50" required>
                        </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                </div>
            </div>
        @endforeach
        </form>

    </div>

@stop
