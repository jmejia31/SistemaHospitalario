@extends('adminlte::page')

@section('title', 'Audios')

@section('content_header')
    <h1>Editar los Audios</h1>
@stop

@section('content')
    <div class="container-fluid">
      {{-- //  {{dd($inventario[1])}} --}}
        @foreach ($Audios[1] as $Audio)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('Audios', $Audio->COD_NOTAS_AUDIO) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">

                            <div class="col-5">

                                <label class="text-danger"> * Codigo de la Nota de Audio</label>
                                <input type="number" class="form-control" value="{{ $Audio->COD_NOTAS_AUDIO }}" name="PI_COD_NOTAS_AUDIO" pattern="^[\p{L} \.'\-]+$"
                                    title=" " maxlength="50" disabled required>

                                <label class="text-danger"> * Codigo del Expediente</label>
                                <input type="number" class="form-control" value="{{ $Audio->COD_EXPEDIENTE }}" name="PI_COD_EXPEDIENTE" pattern="^[\p{L} \.'\-]+$"
                                    title="Solo puede ingresar numeros" maxlength="50" disabled required>

                                <label class="text-danger"> * Codigo del Usuario</label>
                                <input type="number" class="form-control" value="{{ $Audio->COD_USR }}" name="PI_COD_USR"
                                    title="Solo puede ingresar numeros" maxlength="50" disabled required>

                                <label class="text-danger"> * Audio de Paciente</label>
                                <input type="text" class="form-control" value="{{ $Audio->AUDIO_PACIENTE }}" name="PL_AUDIO_PACIENTE" pattern="^[\p{L} \.'\-]+$"
                                    title="Solo puede ingresar letras" maxlength="50" required>

                             </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary"   type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{url('Audios')}}">Regresar</a>
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
