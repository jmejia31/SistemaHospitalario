@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Agregar Nuevo contacto</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{url('proveedores')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Nombre proveedor</label>
                        <input type="Text" class="form-control" name="PV_NOMBRE_PROV" pattern="A-Za-z]+"
                        title="Ingresar números" maxlength="70" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * CAI</label>
                    <input type="number" class="form-control" name="PV_CAI" pattern="[0-9]+"
                    title="Solo puede ingresar letras" maxlength="14" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número fijo</label>
                    <input type="text" class="form-control" name="PV_NUMERO_FIJO" pattern="0-9]+"
                    title="Solo puede ingresar letras" maxlength="14" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número de celular</label>
                    <input type="text" class="form-control" name="PV_NUMERO_CELULAR" pattern="0-9]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Correo</label>
                    <input type="email" class="form-control" name="PV_CORREO" pattern="A-Za-z]+"
                    title="Solo puede ingresar letras" maxlength="30" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * RTN</label>
                    <input type="text" class="form-control" name="PV_RTN" pattern="0-9]+"
                    title="Ingrese datos" maxlength="16" required>
                </div>
                <div class="form-group">
                    <label class="text"> Sitio web</label>
                    <input type="text" class="form-control" name="PV_SITIO_WEB" pattern="A-Za-z]+"
                    title="Solo puede ingresar números" maxlength="20">
                </div>
                <div class="form-group">
                    <label class="text"> Usuario registro</label>
                    <input type="text" class="form-control" name="PV_USR_REGISTRO" pattern="A-Za-z]+"
                    title="Solo puede ingresar números" maxlength="60">
                </div>
            </div>
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Guardar" />
                <a class="btn btn-dark" href="{{url('proveedores')}}">Regresar</a>
            </div>
        </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
