@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Agregar Nuevo Contacto</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{url('contactos')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Código proveedor</label>
                        <input type="number" class="form-control" name="PI_COD_PROVEEDOR" pattern="[0-9]+"
                        title="Ingresar números" maxlength="11" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Primer nombre</label>
                    <input type="text" class="form-control" name="PV_PRIMER_NOMBRE" pattern="A-Za-z]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * segundo nombre</label>
                    <input type="text" class="form-control" name="PV_SEGUNDO_NOMBRE" pattern="A-Za-z]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Primer apellido</label>
                    <input type="text" class="form-control" name="PV_PRIMER_APELLIDO" pattern="A-Za-z]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Segundo apellido</label>
                    <input type="text" class="form-control" name="PV_SEGUNDO_APELLIDO" pattern="A-Za-z]+"
                    title="Solo puede ingresar letras" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Identidad</label>
                    <input type="text" class="form-control" name="PV_IDENTIDAD" pattern="0-9]+"
                    title="Ingrese datos" maxlength="15" required>
                </div>
                <div class="form-group">
                    <label class="text"> * Número de celular</label>
                    <input type="text" class="form-control" name="PV_NUMERO_CELULAR" pattern="0-9]+"
                    title="Solo puede ingresar números" maxlength="20">
                </div>
                <div class="form-group">
                    <label class="text"> * Correo</label>
                    <input type="text" class="form-control" name="PV_CORREO" pattern="A-Za-z]+"
                    title="Solo puede ingresar números" maxlength="30">
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Dirección</label>
                    <input type="text" class="form-control" name="PV_DIRECCION" pattern="A-Za-z0-9]+"
                    title="Ingrese datos" maxlength="100" required>
                </div>
            </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('contactos')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
