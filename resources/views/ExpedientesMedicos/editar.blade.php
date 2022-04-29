@extends('adminlte::page')

@section('title', 'Expedientes')

@section('content_header')
    <h1>Editar Expediente</h1>
@stop

@section('content')
    <div class="container-fluid">


            <div class="card">
                <div class="card-body">

                    @foreach ($expedientes[1] as $expediente)
                    <form action="{{ url('expedientes', $expediente->COD_EXPEDIENTE) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-danger"> Código Expediente</label>
                            <input type="hidden" type="number" class="form-control" value="{{ $expediente->COD_EXPEDIENTE }}" pattern="[0-9]+"
                                name="PI_COD_EXPEDIENTE" disabled required>
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * Código Paciente</label>
                        <input type="number" class="form-control" value="{{ $expediente->COD_PACIENTE }}" pattern="[0-9]+"
                        name="PI_COD_PACIENTE" required>
                    </div>
                <div class="form-group">
                    <label class="text-danger"> * Número expediente</label>
                    <input type="number" class="form-control" value="{{ $expediente->NUMERO_EXPEDIENTE }}" pattern="[0-9]+"
                        name="PI_NUMERO_EXPEDIENTE" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Temperatura</label>
                    <input type="text" class="form-control"  value="{{ $expediente->TEMPERATURA }}" pattern="A-Za-z0-9]+"
                    name="PV_TEMPERATURA" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Presión</label>
                    <input type="text" class="form-control" value="{{ $expediente->PRESION }}" pattern="A-Za-z0-9]+"
                    name="PV_PRESION" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Diagnóstico medico</label>
                    <input type="text" class="form-control" value="{{ $expediente->DIAGNOSTICO_MEDICO }}" pattern="A-Za-z]+"""
                    name="PV_DIAGNOSTICO_MEDICO" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Receta medica</label>
                    <input type="text" class="form-control" value="{{ $expediente->RECETA_MEDICA }}" pattern="A-Za-z0-9]+"
                    name="PV_RECETA_MEDICA" required>
                </div>
                <div class="form-group">
                    <label class="text"> Número de planta</label>
                    <input type="text" class="form-control" value="{{ $expediente->NUMERO_PLANTA }}" pattern="0-9]+"
                    name="PI_NUMERO_PLANTA">
                </div>
                <div class="form-group">
                    <label class="text"> Número de cama</label>
                    <input type="text" class="form-control" value="{{ $expediente->NUMERO_CAMA }}" pattern="0-9]+"
                    name="PI_NUMERO_CAMA" >
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Nombre medico</label>
                    <input type="text" class="form-control" value="{{ $expediente->NOMBRE_MEDICO }}" pattern="A-Za-z]+"
                    name="PV_NOMBRE_MEDICO" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Usuario registro</label>
                    <input type="text" class="form-control" value="{{ $expediente->USR_REGISTRO }}" pattern="A-Za-z]+"
                    name="PV_USR_REGISTRO"  required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Observaciones</label>
                    <input type="text" class="form-control" value="{{ $expediente->OBSERVACIONES }}" pattern="A-Za-z0-9]+"
                    name="PV_OBSERVACIONES" required>
                </div>
            </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('expedientes')}}">Regresar</a>
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
