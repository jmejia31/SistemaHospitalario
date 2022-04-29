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
                <a class="btn btn-success" href="{{ url('permisos/create') }}">Crear</a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                    <tr>
                        <th>#</th>
                        <th>Codigo de Rol</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                        <th>Ingresar</th>
                        <th>Consultar</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($permisos[0] as $permiso)
                        <tr>
                            <td>{{ $permiso->COD_PERMISO }}</td>
                            <td>{{ $permiso->COD_ROL_USR }}</td>
                            <td>{{ $permiso->ELIMINAR }}</td>
                            <td>{{ $permiso->EDITAR }}</td>
                            <td>{{ $permiso->INGRESAR }}</td>
                            <td>{{ $permiso->CONSULTAR }}</td>

                            <div style="text-align: center">

                                <td>

                                    <div class="btn-group btn-group-justified">
                                        <div class="mr-2">
                                            <a class="btn btn-warning"
                                                href="{{ url('permisos/' . $permiso->COD_PERMISO . '/edit') }}">Editar</a>
                                        </div>

                                        <div class="mr-2">
                                            <a class="btn btn-primary"
                                                href="{{ url('permisos/' . $permiso->COD_PERMISO) }}">Consultar</a>
                                        </div>

                                        <form method="post" action="{{ url('permisos', $permiso->COD_PERMISO) }}">
                                            @csrf()
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Eliminar" />
                                        </form>

                                    </div>
                                </td>
                            </div>


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
