@extends('adminlte::page')

@section('title', 'Expedientes')

@section('content_header')
    <h1>Agregar Nuevo Expediente</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{url('expedientes')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Código Paciente</label>
                        <input type="number" class="form-control" name="PI_COD_PACIENTE" pattern="[0-9]+"
                        title="Ingresar números" maxlength="11" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número expediente</label>
                    <input type="number" class="form-control" name="PI_NUMERO_EXPEDIENTE" pattern="[0-9]+"
                    title="Solo puede ingresar letras" maxlength="11" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Temperatura</label>
                    <input type="text" class="form-control" name="PV_TEMPERATURA" pattern="A-Za-z0-9]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Presión</label>
                    <input type="text" class="form-control" name="PV_PRESION" pattern="A-Za-z0-9]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Diagnóstico medico</label>
                    <input type="text" class="form-control" name="PV_DIAGNOSTICO_MEDICO" pattern="A-Za-z0-9]+"
                    title="Solo puede ingresar letras" maxlength="300" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Receta medica</label>
                    <input type="text" class="form-control" name="PV_RECETA_MEDICA" pattern="A-Za-z0-9]+"
                    title="Ingrese datos" maxlength="200" required>
                </div>
                <div class="form-group">
                    <label class="text"> Número de planta</label>
                    <input type="text" class="form-control" name="PI_NUMERO_PLANTA" pattern="0-9]+"
                    title="Solo puede ingresar números" maxlength="11">
                </div>
                <div class="form-group">
                    <label class="text"> Número de cama</label>
                    <input type="text" class="form-control" name="PI_NUMERO_CAMA" pattern="0-9]+"
                    title="Solo puede ingresar números" maxlength="11">
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Nombre medico</label>
                    <input type="text" class="form-control" name="PV_NOMBRE_MEDICO" pattern="A-Za-z]+"
                    title="Ingrese datos" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Usuario registro</label>
                    <input type="text" class="form-control" name="PV_USR_REGISTRO" pattern="A-Za-z]+"
                    title="Ingrese datos" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Observaciones</label>
                    <input type="text" class="form-control" name="PV_OBSERVACIONES" pattern="A-Za-z0-9]+"
                    title="Ingrese datos" maxlength="300" required>
                </div>
            </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('expedientes')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
