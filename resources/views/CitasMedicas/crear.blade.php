@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Agregar Nueva Cita</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ url('citas') }}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">

                    <div class="form-group">

                        <label class="text-danger"> * Cod Paciente</label>
                        <input type="number" class="form-control" name="COD_PACIENTE" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Especialidad</label>
                        <input type="text" class="form-control" name="ESPECIALIDAD_REQUERIDA" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Nombre del medico</label>
                        <input type="text" class="form-control" name="NOMBRE_MEDICO" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Cubiculo</label>
                        <input type="text" class="form-control" name="CUBICULO" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Fecha de Atencion</label>
                        <input type="date" class="form-control" name="FEC_ATENCION" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Estado</label>
                        <input type="text" class="form-control" name="ESTADO" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Usuario que registro</label>
                        <input type="text" class="form-control" name="USR_REGISTRO" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Observaciones</label>
                        <input type="text" class="form-control" name="OBSERVACIONES" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>


                    </div>

                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{ url('citas') }}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
