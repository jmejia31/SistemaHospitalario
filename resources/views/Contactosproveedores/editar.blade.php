@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Editar Contacto</h1>
@stop

@section('content')
    <div class="container-fluid">

        <div class="card">
                <div class="card-body">
                    @foreach ($contactos[1] as $contacto)
                    <form action="{{ url('contactos', $contacto->COD_CONTAC_PROVEEDOR) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-danger"> Código contacto proveedor</label>
                            <input type="number" class="form-control" value="{{ $contacto->COD_CONTAC_PROVEEDOR }}" pattern="[0-9]+"
                                name="PI_COD_CONTAC_PROVEEDOR" disabled required>
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * Código proveedor</label>
                        <input type="number" class="form-control" value="{{ $contacto->COD_PROVEEDOR }}" pattern="[0-9]+"
                        name="PI_COD_PROVEEDOR" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Primer nombre</label>
                            <input type="text" class="form-control" value="{{ $contacto->PRIMER_NOMBRE }}" pattern="A-Za-z]+"
                            name="PV_PRIMER_NOMBRE" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Segundo nombre</label>
                            <input type="text" class="form-control"  value="{{ $contacto->SEGUNDO_NOMBRE }}" pattern="A-Za-z]+"
                             name="PV_SEGUNDO_NOMBRE" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Primer apellido</label>
                            <input type="text" class="form-control" value="{{ $contacto->PRIMER_APELLIDO }}" pattern="A-Za-z]+"
                            name="PV_PRIMER_APELLIDO" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Segundo apellido</label>
                            <input type="text" class="form-control" value="{{ $contacto->SEGUNDO_APELLIDO }}" pattern="A-Za-z]+"""
                            name="PV_SEGUNDO_APELLIDO" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Identidad</label>
                            <input type="text" class="form-control" value="{{ $contacto->IDENTIDAD }}" pattern="0-9]+"
                            name="PV_IDENTIDAD" required>
                        </div>
                        <div class="form-group">
                        <label class="text-danger"> * Número de celular</label>
                            <input type="text" class="form-control" value="{{ $contacto->NUMERO_CELULAR }}" pattern="0-9]+"
                            name="PV_NUMERO_CELULAR">
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Correo</label>
                            <input type="email" class="form-control" value="{{ $contacto->CORREO }}" pattern="A-Za-z0-9]+"
                            name="PV_CORREO" >
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Dirección</label>
                            <input type="text" class="form-control" value="{{ $contacto->DIRECCION }}" pattern="A-Za-z0-9]+"
                            name="PV_DIRECCION" required>
                        </div>
                        </div>
                            <div class="card-footer">
                        <input class="btn btn-primary" type="submit" value="Guardar" />
                        <a class="btn btn-dark" href="{{url('contactos')}}">Regresar</a>
                     </div>
                </div>
            @endforeach
        </div>


    </div>
@stop

@section('css')
@stop

@section('js')
@stop
