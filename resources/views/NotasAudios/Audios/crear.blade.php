@extends('adminlte::page')

@section('title', 'Audios')

@section('content_header')
    <h1>Crear Nota de Audio</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{url('Audios')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger" max="4", > * Codigo de la Nota de Audio </label>
                        <input type="number" class="form-control" maxlength="4" name="PI_COD_NOTAS_AUDIO" pattern="^[\p{L} \.'\-]+$"
                        title="Solo puede ingresar numeros"maxlength="4", required >
                    </div>
                    <div class="form-group">
                        <label class="text-danger"> * Codigo del Expediente </label>
                        <input type="number" class="form-control" name="PI_COD_EXPEDIENTE" pattern="^[\p{L} \.'\-]+$"
                        title="Solo puede ingresar numeros" maxlength="4" required>
                    </div>
                    <div class="form-group">
                        <label class="text-danger"> * Codigo del Usuario </label>
                        <input type="number" class="form-control" name="PI_COD_USR" pattern="^[\p{L} \.'\-]+$"
                        title="Solo puede ingresar numeros" max="4" required>
                    </div>
                    <div class="form-option" > Seleccione la Nota de Audio
                        <input type="text" class="form-control" name="PL_AUDIO_PACIENTE" pattern="^[\p{L} \.'\-]+$"
                        title=" " id ="">
                    </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary " type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('Audios')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
