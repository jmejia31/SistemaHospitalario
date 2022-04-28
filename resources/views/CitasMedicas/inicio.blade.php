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
                <a class="btn btn-success" href="{{ url('citas/create') }}">Crear</a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                    <tr>
                        <th>N°Cita</th>
                        <th>Paciente</th>
                        <th>Especialidad</th>
                        <th>Medico</th>
                        <th>Cubiculo</th>
                        <th>Fecha de atencion</th>
                        <th>Estado</th>
                        <th>Usuario que registro</th>
                        <th>Obeservaciones</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($citas[0] as $cita)
                        <tr>
                            <td>{{ $cita->COD_CITA }}</td>
                            <td>{{ $cita->COD_PACIENTE }}</td>
                            <td>{{ $cita->ESPECIALIDAD_REQUERIDA }}</td>
                            <td>{{ $cita->NOMBRE_MEDICO }}</td>
                            <td>{{ $cita->CUBICULO }}</td>
                            <td>{{ $cita->FEC_ATENCION }}</td>
                            <td>{{ $cita->ESTADO }}</td>
                            <td>{{ $cita->USR_REGISTRO }}</td>
                            <td>{{ $cita->OBSERVACIONES }}</td>

                            <td>

                                <div class="d-flex justify-content-between">
                                    <div class="mr-2">
                                        <a class="btn btn-warning"
                                            href="{{ url('citas/' . $cita->COD_CITA . '/edit') }}">Editar</a>
                                    </div>

                                    <div class="mr-2">
                                        <a class="btn btn-primary"
                                            href="{{ url('citas/' . $cita->COD_CITA) }}">Consultar</a>
                                    </div>

                                    <form method="post" action="{{ url('citas', $cita->COD_CITA) }}">
                                        @csrf()
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Eliminar" />
                                    </form>

                                </div>
                            </td>

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
