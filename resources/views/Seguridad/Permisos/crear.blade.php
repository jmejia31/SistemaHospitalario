@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Agregar Nueva Categoria</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{url('categorias')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="text-danger"> * Nombre de la categoria</label>
                        <input type="text" class="form-control" name="PV_DESC_CATEGORIA" pattern="^[\p{L} \.'\-]+$"
                        title="Solo puede ingresar letras" maxlength="50" required>
                    </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{url('categorias')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
