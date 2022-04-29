@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Datos del Usuario</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            @foreach ($infousuario[0] as $datos)
                <form action="{{ url('Usuariocliente', $datos->COD_USR) }}" method="post">
                    @csrf()
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <input type="hidden" name="PI_COD_USR" value="{{ $datos->COD_USR }}">
                                <input type="hidden" name="PI_COD_ROL_USR" value="{{ $datos->COD_ROL_USR }}">
                                <div class="form-group">
                                    <label>Especialidad:</label>
                                    <input type="text" name="PI_COD_ESPECIALIDAD" value="{{ $datos->COD_ESPECIALIDAD }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label>Usuario:</label>
                                    <input type="text" name="PV_USR_PERS" value="{{ $datos->USR_PERS }}"
                                        class="form-control">
                                </div>
                                <input type="hidden" name="PV_PASSWD_PERS" value="{{ $datos->PASSWD_PERS }}">
                                <input type="hidden" name="PV_VERIFY_PASSWD_PERS"
                                    value="{{ $datos->VERIFY_PASSWD_PERS }}">
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label>Número de Colegiatura:</label>
                                    <input type="text" name="PV_NUMERO_COLEGIATURA"
                                        value="{{ $datos->NUMERO_COLEGIATURA }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Primer Nombre:</label>
                                    <input type="text" name="PV_PRIMER_NOMBRE" value="{{ $datos->PRIMER_NOMBRE }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Segundo Nombre:</label>
                                    <input type="text" name="PV_SEGUNDO_NOMBRE" value="{{ $datos->SEGUNDO_NOMBRE }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Primer Apellido:</label>
                                    <input type="text" name="PV_PRIMER_APELLIDO" value="{{ $datos->PRIMER_APELLIDO }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Segundo Apellido:</label>
                                    <input type="text" name="PV_SEGUNDO_APELLIDO" value="{{ $datos->SEGUNDO_APELLIDO }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>DNI:</label>
                                    <input type="text" name="PV_NO_IDENTIDAD" value="{{ $datos->NO_IDENTIDAD }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Correo Electrónico:</label>
                                    <input type="email" name="PV_EMAIL" value="{{ $datos->EMAIL }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Teléfono:</label>
                                    <input type="text" name="PV_TEL" value="{{ $datos->TEL }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Celular:</label>
                                    <input type="text" name="PV_CELL" value="{{ $datos->CELL }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sexo:</label>
                                    <select name="PE_GEN" class="form-control">
                                        <option value="{{ $datos->GEN }}">{{ $datos->GEN }}</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Estado Civil:</label>
                                    <select name="PE_ESTADO_CIVIL" class="form-control">
                                        <option value="{{ $datos->ESTADO_CIVIL }}">{{ $datos->ESTADO_CIVIL }}</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viudo">Viudo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Edad:</label>
                                    <input type="number" name="PT_EDAD" value="{{ $datos->EDAD }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento:</label>
                                    <input type="date" name="PD_FEC_NTO"
                                        value="{{ \Carbon\Carbon::parse(strtotime($datos->FEC_NTO))->format('Y-m-d') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Estado:</label>
                                    <select name="PE_ESTADO" class="form-control">
                                        <option value="{{ $datos->ESTADO }}">{{ $datos->ESTADO }}</option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Salario:</label>
                                    <input type="text" name="PD_SALARIO" value="{{ $datos->SALARIO }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label>Fecha Registro:</label>
                                    <input type="date"
                                        value="{{ \Carbon\Carbon::parse(strtotime($datos->FEC_REG))->format('Y-m-d') }}"
                                        class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Dirección:</label>
                                    <textarea class="form-control" name="PV_DIR" rows="3">{{ $datos->DIR }}</textarea>
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
                    <form method="post" action="{{ url('Usuariocliente', $datos->COD_USR) }}">
                        @csrf()
                        @method('DELETE')
                        <input class="btn btn-danger btn-block" type="submit" value="Eliminar" />
                    </form>
                </div>

                <div class="col-4">
                    <a class="btn btn-dark btn-block" href="{{ url('Usuarios') }}">Regresar</a>
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
