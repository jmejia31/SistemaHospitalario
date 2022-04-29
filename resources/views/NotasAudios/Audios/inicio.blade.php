@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> HOME </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success"  href="{{ url('Audios/create') }}">Agregar Audio </a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                    <tr>
                        <th poss>Codigo Expediente</th>
                        <th> NOMBRE </th>
                        <th> APELLIDO </th>
                        <th>Nota de Audio</th>
                        <th> Registrado por </th>
                    </tr>
                    @foreach ($Audios[0] as $Audio)
                        <tr>
                            <td>{{ $Audio->COD_EXPEDIENTE}}</td>
                            <td>{{ $Audio->PRIMER_NOMBRE}}</td>
                            <td>{{ $Audio->PRIMER_APELLIDO}}</td>
                            <td>{{ $Audio->AUDIO_PACIENTE}}</td>
                            <td>{{ $Audio->USR_REGISTRO}}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('Audios/' . $Audio->COD_NOTAS_AUDIO . '/edit') }}">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ url('Audios/' . $Audio->COD_NOTAS_AUDIO ) }}">Consultar</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('Audios', $Audio->COD_NOTAS_AUDIO) }}">
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
