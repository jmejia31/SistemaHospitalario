@extends('adminlte::page')

@section('title', 'Audios')

@section('content_header')
    <h1>Informacion del Paciente </h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($Audios[1] as $Audio)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> Codigo de la Nota de Audio</label>
                        <input type="text" class="form-control" value="{{ $Audio->COD_NOTAS_AUDIO }}"
                            name="PI_COD_NOTAS_AUDIO" pattern="^[\p{L} \.'\-]+$" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger"> * Codigo del Expediente Medico</label>
                        <input type="text" class="form-control" value="{{ $Audio->COD_EXPEDIENTE }}"
                            name="COD_EXPEDIENTE" pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras"
                            maxlength="50" required disabled>
                    </div>
                    <div class="form-group">
                        <label class="text-danger"> * Codigo del Usuario </label>
                        <input type="text" class="form-control" value="{{ $Audio->COD_USR }}"
                            name="COD_USR" pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras"
                            maxlength="50" required disabled>
                    </div>

                    <div class="form-group">
                        <label class="text-danger"> * Nota de Audio </label>
                        <input type="text" class="form-control" value="{{ $Audio->AUDIO_PACIENTE }}"
                            name="AUDIO_PACIENTE" pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras"
                            maxlength="50" required disabled>
                    </div>
                <div class="card-footer">
                    <a class="btn btn-dark" href="{{ url('Audios') }}">Regresar</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
