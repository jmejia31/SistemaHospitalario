@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
    <div class="container-fluid">
        @foreach ($categorias[1] as $categoria)
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('categorias', $categoria->COD_CATEG) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label class=""> Codigo de la categoria</label>
                            <input type="text" class="form-control" value="{{ $categoria->COD_CATEG }}"
                                name="PI_COD_CATEGORIA" disabled required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger"> * Nombre de la categoria</label>
                            <input type="text" class="form-control" value="{{ $categoria->DESC_CATEGORIA }}"
                                name="PV_DESC_CATEGORIA" pattern="^[\p{L} \.'\-]+$" title="Solo puede ingresar letras"
                                maxlength="50" required>
                        </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                    <a class="btn btn-dark" href="{{url('categorias')}}">Regresar</a>
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
