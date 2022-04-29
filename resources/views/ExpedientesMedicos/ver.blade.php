@extends('adminlte::page')

@section('title', 'Expedientes')

@section('content_header')
    <h1>Mostrar Expediente</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($expedientes[1] as $expediente)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="text-danger"> Código Expediente</label>
                            <input type="number" class="form-control" value={{ $expediente->COD_EXPEDIENTE }} pattern="[0-9]+"
                                name="PI_COD_EXPEDIENTE" disabled required>
                        </div>
                            <label class="text-danger"> * Código Paciente</label>
                        <input type="number" class="form-control" value={{ $expediente->COD_PACIENTE }} pattern="[0-9]+"
                        name="PI_COD_PACIENTE" disabled required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número expediente</label>
                    <input type="number" class="form-control" value={{ $expediente->NUMERO_EXPEDIENTE }} pattern="[0-9]+"
                        name="PI_NUMERO_EXPEDIENTE" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Temperatura</label>
                    <input type="text" class="form-control"  value={{ $expediente->TEMPERATURA }} pattern="A-Za-z0-9]+"
                    name="PV_TEMPERATURA" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Presión</label>
                    <input type="text" class="form-control" value={{ $expediente->PRESION }} pattern="A-Za-z0-9]+"
                    name="PV_PRESION" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Diagnóstico medico</label>
                    <input type="text" class="form-control" value={{ $expediente->DIAGNOSTICO_MEDICO }} pattern="A-Za-z]+"
                    name="PV_DIAGNOSTICO_MEDICO" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Receta medica</label>
                    <input type="text" class="form-control" value={{ $expediente->RECETA_MEDICA }} pattern="A-Za-z0-9]+"
                    name="PV_RECETA_MEDICA" disabled required>
                </div>
                <div class="form-group">
                    <label class="text"> Número de planta</label>
                    <input type="text" class="form-control" value={{ $expediente->NUMERO_PLANTA }} pattern="0-9]+"
                    name="PI_NUMERO_PLANTA" disabled required>
                </div>
                <div class="form-group">
                    <label class="text"> Número de cama</label>
                    <input type="text" class="form-control" value={{ $expediente->NUMERO_CAMA }} pattern="0-9]+"
                    name="PI_NUMERO_CAMA" disabled>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Nombre medico</label>
                    <input type="text" class="form-control" value={{ $expediente->NOMBRE_MEDICO }} pattern="A-Za-z]+"
                    name="PV_NOMBRE_MEDICO" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Usuario registro</label>
                    <input type="text" class="form-control" value={{ $expediente->USR_REGISTRO }} pattern="A-Za-z]+"
                    name="PV_USR_REGISTRO" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Observaciones</label>
                    <input type="text" class="form-control" value={{ $expediente->OBSERVACIONES }} pattern="A-Za-z0-9]+"
                    name="PV_OBSERVACIONES" disabled required>
                </div>
            </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('expedientes')}}">Regresar</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
