@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Editar Ventas</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($verventas[1] as $verventa)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('verventas', $verventa->COD_VENTA)}}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class=""> Codigo de venta</label>
                            <input type="text" class="form-control" value="{{ $verventa->COD_VENTA }}"
                                name="PI_COD_VENTA" disabled required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> *Codigo de inventario</label>
                            <input type="text" class="form-control" value="{{ $verventa->COD_INVENTARIO}}"
                                name="PI_COD_INVENTARIO">
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> *Codigo de producto</label>
                            <input type="text" class="form-control" value="{{ $verventa->COD_PRODUCTO}}"
                                name="PI_COD_PRODUCTO">
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> Numero de venta</label>
                            <input type="text" class="form-control" value="{{ $verventa->NUM_VENTA}}"
                                name="PI_NUM_VENTA">
                        </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{url('verventas')}}">Regresar</a>
                </div>
            </div>
        @endforeach

    </div>
@stop

@section('css')
@stop

@section('js')
@stop
