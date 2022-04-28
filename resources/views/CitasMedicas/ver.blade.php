@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Mostrar cita</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($Citas[1] as $categoria)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class=""> Codigo cita</label>
                        <input type="text" class="form-control" value="{{ $cita->COD_CITA }}" name="COD_CITA" disabled
                            required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger"> * Cita</label>
                        <input type="text" class="form-control" value="{{ $cita->COD_CITA }}" name="COD_CITA"
                            pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required disabled>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-dark" href="{{ url('Citas') }}">Regresar</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
