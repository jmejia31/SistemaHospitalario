@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Mostrar Proveedores</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($proveedores[0] as $proveedor)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text"> Codigo proveedor</label>
                        <input type="number" class="form-control" value="{{ $proveedor->COD_PROVEEDOR }}"
                            name="PI_COD_CATEGORIA" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Nombre del proveedor</label>
                        <input type="text" class="form-control" value="{{ $proveedor->NOMBRE_PROV }}"
                            name="PV_NOMBRE_PROV" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * CAI</label>
                        <input type="text" class="form-control" value="{{ $proveedor->CAI }}"
                            name="PV_CAI" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * CAI</label>
                        <input type="text" class="form-control" value="{{ $proveedor->CAI }}"
                            name="PV_CAI" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Número fijo</label>
                        <input type="text" class="form-control" value="{{ $proveedor->NUMERO_FIJO }}"
                            name="PV_NUMERO_FIJO" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Número celular</label>
                        <input type="text" class="form-control" value="{{ $proveedor->NUMERO_CELULAR }}"
                            name="PV_NUMERO_CELULAR" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Correo</label>
                        <input type="text" class="form-control" value="{{ $proveedor->CORREO }}"
                            name="PV_CORREO" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * RTN</label>
                        <input type="text" class="form-control" value="{{ $proveedor->RTN }}"
                            name="PV_RTN" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Sitio web</label>
                        <input type="text" class="form-control" value="{{ $proveedor->SITIO_WEB }}"
                            name="PV_SITIO_WEB" disabled required>
                    </div>
                    <div class="form-group">
                        <label class="text"> * Usuario registro</label>
                        <input type="text" class="form-control" value="{{ $proveedor->USR_REGISTRO }}"
                            name="PV_USR_REGISTRO" disabled required>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-dark" href="{{ url('proveedores') }}">Regresar</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
