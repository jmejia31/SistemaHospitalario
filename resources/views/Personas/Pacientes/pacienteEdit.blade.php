@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Editar Datos de Paciente</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            @foreach ($infopaciente[0] as $datos)
                <form action="{{ url('Pacientecliente', $datos->COD_PACIENTE) }}" method="post">
                    @csrf()
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <input type="hidden" name="PI_COD_PACIENTE" value="{{ $datos->COD_PACIENTE }}">
                                <input type="hidden" name="PI_COD_USR" value="1">
                                <div class="form-group">
                                    <label>Primer Nombre:</label>
                                    <input type="text" name="PV_PRIMER_NOMBRE" value="{{ $datos->PRIMER_NOMBRE }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Segundo Nombre:</label>
                                    <input type="text" name="PV_SEGUNDO_NOMBRE" value="{{ $datos->SEGUNDO_NOMBRE }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Primer Apellido:</label>
                                    <input type="text" name="PV_PRIMER_APELLIDO" value="{{ $datos->PRIMER_APELLIDO }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Segundo Apellido:</label>
                                    <input type="text" name="PV_SEGUNDO_APELLIDO" value="{{ $datos->SEGNDO_APELLIDO }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>DNI:</label>
                                    <input type="text" name="PV_DNI" value="{{ $datos->DNI }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento:</label>
                                    <input type="date" name="PD_FEC_NACIMIENTO"
                                        value="{{ \Carbon\Carbon::parse(strtotime($datos->FEC_NACIMIENTO))->format('Y-m-d') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Sexo:</label>
                                    <select name="PE_GENERO" class="form-control">
                                        <option value="{{ $datos->GENERO }}">{{ $datos->GENERO }}</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Correo Electrónico:</label>
                                    <input type="email" name="PV_EMAIL" value="{{ $datos->EMAIL }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Teléfono:</label>
                                    <input type="text" name="PV_TELEFONO" value="{{ $datos->TELEFONO }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Celular:</label>
                                    <input type="text" name="PV_CELULAR" value="{{ $datos->CELULAR }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Fecha Registro:</label>
                                    <input type="date"
                                        value="{{ \Carbon\Carbon::parse(strtotime($datos->FEC_REGISTRO))->format('Y-m-d') }}"
                                        class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Dirección:</label>
                                    <textarea class="form-control" name="PV_DIRECCION" rows="3">{{ $datos->DIRECCION }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">

                            <div class="col-4">
                                <input class="btn btn-success btn-block" type="submit" value="Editar" />
                            </div>
                </form>
                <div class="col-4">
                    <form method="post" action="{{ url('Pacientecliente', $datos->COD_PACIENTE) }}">
                        @csrf()
                        @method('DELETE')
                        <input class="btn btn-danger btn-block" type="submit" value="Eliminar" />
                    </form>
                </div>

                <div class="col-4">
                    <a class="btn btn-dark btn-block" href="{{ url('Pacientes') }}">Regresar</a>
                </div>
        </div>
    </div>
    @endforeach
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
