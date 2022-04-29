@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    <div class="container-fluid">

        @foreach ($citas[0] as $cita)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('citas', $cita->COD_CITA) }}" method="post">
                        @csrf()
                        @method('PUT')

                </div>
            </div>

            <div class="mb-3">


                <div class="form-group">
                    <label class="text-danger"> * Codigo del paciente</label>
                    <input type="number" class="form-control" value="{{ $cita->COD_PACIENTE }}" name="COD_PACIENTE"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>

                <div class="form-group">
                    <label class="text-danger"> * Especialidad</label>
                    <input type="text" class="form-control" value="{{ $cita->ESPECIALIDAD_REQUERIDA }}"
                        name="ESPECIALIDAD_REQUERIDA" pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras"
                        maxlength="50" required>
                </div>

                <div class="form-group">
                    <label class="text-danger"> * Nombre del medico</label>
                    <input type="text" class="form-control" value="{{ $cita->NOMBRE_MEDICO }}" name="NOMBRE_MEDICO"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>

                <div class="form-group">
                    <label class="text-danger"> * Cubiculo</label>
                    <input type="text" class="form-control" value="{{ $cita->CUBICULO }}" name="CUBICULO"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>

                <div class="form-group">
                    <label class="text-danger"> * Fecha de atencion</label>
                    <input type="date" class="form-control" value="{{ $cita->FEC_ATENCION }}" name="FEC_ATENCION"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Estado</label>
                    <input type="text" class="form-control" value="{{ $cita->ESTADO }}" name="ESTADO"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Usuario que registro</label>
                    <input type="text" class="form-control" value="{{ $cita->USR_REGISTRO }}" name="USR_REGISTRO"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Observaciones</label>
                    <input type="text" class="form-control" value="{{ $cita->OBSERVACIONES }}" name="OBSERVACIONES"
                        pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras" maxlength="50" required>
                </div>

                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{ url('citas') }}">Regresar</a>
                </div>
            </div>

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
