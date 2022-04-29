@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

<style>
    table th {
        text-align: center;
    }

    table tr {
        text-align: center;
    }

    table tr:nth-child(4) {
        text-align: center;
    }

</style>

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="{{ url('roles/create') }}">Crear</a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                    <tr>
                        <th>Codigo Rol</th>
                        <th>Rol</th>
                    </tr>
                    @foreach ($roles[0] as $rol)
                        <tr>
                            <td>{{ $rol->COD_ROL_USR }}</td>
                            <td>{{ $rol->ROL }}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('roles/' . $rol->COD_ROL_USR . '/edit') }}">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('roles/' . $rol->COD_ROL_USR) }}">Consultar</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('roles', $rol->COD_ROL_USR) }}">
                                    @csrf()
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $("#registros").DataTable({
                "language": {
                    "sSearch": "Buscar:",
                    "sEmptyTable": "No hay datos disponibles",
                    "sZeroRecords": "No se han encontrado resultados",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
                    "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
                    "sInfoFiltered": "(filtrando de un total de _MAX_ registrados)",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",

                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },

                    "sLoadingRecords": "Cargando...",
                    "sLengthMenu": "Mostrar _MENU_ registros"
                },
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
