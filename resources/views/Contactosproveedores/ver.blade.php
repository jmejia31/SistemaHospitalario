@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Mostrar Expediente</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($contactos[1] as $contacto)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="text-danger"> Código contacto proveedor</label>
                            <input type="number" class="form-control" value={{ $contacto->COD_CONTAC_PROVEEDOR  }} pattern="[0-9]+"
                                name="PI_COD_CONTAC_PROVEEDOR" disabled required>
                        </div>
                            <label class="text-danger"> * Código proveedor</label>
                        <input type="number" class="form-control" value={{ $contacto->COD_PROVEEDOR }} pattern="[0-9]+"
                        name="PI_COD_PROVEEDOR" disabled required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Primer nombre</label>
                    <input type="number" class="form-control" value={{ $contacto->PRIMER_NOMBRE }} pattern="[0-9]+"
                        name="PV_PRIMER_NOMBRE" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Segundo nombre</label>
                    <input type="text" class="form-control"  value={{ $contacto->SEGUNDO_NOMBRE }} pattern="A-Za-z0-9]+"
                    name="PV_SEGUNDO_NOMBRE" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Primer apellido</label>
                    <input type="text" class="form-control" value={{ $contacto->PRIMER_APELLIDO }} pattern="A-Za-z0-9]+"
                    name="PV_PRIMER_APELLIDO" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Segundo apellido</label>
                    <input type="text" class="form-control" value={{ $contacto->SEGUNDO_APELLIDO }} pattern="A-Za-z]+"
                    name="PV_SEGUNDO_APELLIDO" disabled required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Identidad</label>
                    <input type="text" class="form-control" value={{ $contacto->IDENTIDAD }} pattern="A-Za-z0-9]+"
                    name="PV_IDENTIDAD" disabled required>
                </div>
                <div class="form-group">
                    <label class="text"> * Número de celular</label>
                    <input type="text" class="form-control" value={{ $contacto->NUMERO_CELULAR }} pattern="0-9]+"
                    name="PV_NUMERO_CELULAR" disabled required>
                </div>
                <div class="form-group">
                    <label class="text"> * Correo</label>
                    <input type="text" class="form-control" value={{ $contacto->CORREO }} pattern="0-9]+"
                    name="PV_CORREO" disabled>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Dirección</label>
                    <input type="text" class="form-control" value={{ $contacto->DIRECCION }} pattern="A-Za-z]+"
                    name="PV_DIRECCION" disabled required>
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
