@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Editar Proveedores</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($proveedores[1] as $proveedor)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('proveedores', $proveedor->COD_PROVEEDOR ) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <label class="text-danger"> Código Proveedor</label>
                            <input type="hidden" type="number" class="form-control" value="{{ $proveedor->COD_PROVEEDOR }}" pattern="[0-9]+"
                                name="PI_COD_PROVEEDOR" disabled required>
                        </div>

                        <div class="form-group">
                            <label class="text-danger"> * Nombre proveedor</label>
                        <input type="text" class="form-control" value="{{ $proveedor->NOMBRE_PROV }}" pattern="A-Za-z0-9]+"
                        name="PV_NOMBRE_PROV" required>
                    </div>
                <div class="form-group">
                    <label class="text-danger"> * CAI</label>
                    <input type="text" class="form-control" value="{{ $proveedor->CAI }}" pattern="A-Za-z0-9]+"
                        name="PV_CAI" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número fijo</label>
                    <input type="text" class="form-control"  value="{{ $proveedor->NUMERO_FIJO }}" pattern="A-Za-z0-9]+"
                    name="PV_NUMERO_FIJO" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * Número celular</label>
                    <input type="text" class="form-control" value="{{ $proveedor->NUMERO_CELULAR }}" pattern="0-9]+"
                    name="PV_NUMERO_CELULAR" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * CORREO</label>
                    <input type="email" class="form-control" value="{{ $proveedor->CORREO }}" pattern="A-Za-z0-9]+"
                    name="PV_CORREO" required>
                </div>
                <div class="form-group">
                    <label class="text-danger"> * RTN</label>
                    <input type="text" class="form-control" value="{{ $proveedor->RTN }}" pattern="A-Za-z0-9]+"
                    name="PV_RTN" required>
                </div>
                <div class="form-group">
                    <label class="text"> Sitio web</label>
                    <input type="text" class="form-control" value="{{ $proveedor->SITIO_WEB }}" pattern="A-Za-z0-9]+"
                    name="PV_SITIO_WEB">
                </div>
                <div class="form-group">
                    <label class="text"> Usuario registro</label>
                    <input type="text" class="form-control" value="{{ $proveedor->USR_REGISTRO }}" pattern="0-9]+"
                    name="PV_USR_REGISTRO" >
                </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{url('proveedores')}}">Regresar</a>
                </div>
            </div>
        @endforeach
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
