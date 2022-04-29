@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('title', 'Especialidades')

@section('content_header')
    <h1>Registro de Especialidades</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="{{ url('Especialidades/create') }}">Crear</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover dataTable dtr-inline">
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Especialidad</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($infoespecialidad[0] as $especialidadresultado)
                        <tr>
                            <td>{{ $especialidadresultado->COD_ESPECIALIDAD }}</td>
                            <td>{{ $especialidadresultado->NOMBRE_ESPECIALIDAD }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('Especialidades', $especialidadresultado->COD_ESPECIALIDAD) }}">Consultar</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ url('Especialidades/' . $especialidadresultado->COD_ESPECIALIDAD . '/edit') }}">Editar</a>
                            </td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@stop



