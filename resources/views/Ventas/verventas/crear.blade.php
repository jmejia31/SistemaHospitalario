@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Agregar Nueva venta</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{url('verventas')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Codigo de inventario</label>
                        <input type="number" class="form-control" name="PI_COD_INVENTARIO" >
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Codigo de producto</label>
                        <input type="number" class="form-control" name="PI_COD_PRODUCTO" >
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> *Numero de venta</label>
                        <input type="number" class="form-control" name="PI_NUM_VENTA" >
                    </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('verventas')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
