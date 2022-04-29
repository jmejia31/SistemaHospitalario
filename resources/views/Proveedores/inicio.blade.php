@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Proveedores</h1>
@stop
@section('css')

<!-- overlayScrollbars -->
<link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="table-responsive">
                <a class="btn btn-success" href="{{ url('proveedores/create') }}">Agregar nuevo <span class="fa fa-plus-circle"></span></a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-sm table-striped table-hover table-bordered" style="width:100%">
                    <thead style="background-color: #3b83bd;color: white; font-weight: bold;">
                    <tr>
                        <th>Código proveedor</th>
                        <th>Nombre proveedor]</th>
                        <th>CAI</th>
                        <th>Número fijo</th>
                        <th>Número celular</th>
                        <th>Correo</th>
                        <th>RTN</th>
                        <th>Sitio web</th>
                        <th>Usuario registro</th>
                        <th>Fecha registro</th>
                    </tr>
                    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                        <tr>
                            <th>Código proveedor</th>
                            <th>Nombre proveedor]</th>
                            <th>CAI</th>
                            <th>Número fijo</th>
                            <th>Número celular</th>
                            <th>Correo</th>
                            <th>RTN</th>
                            <th>Sitio web</th>
                            <th>Usuario registro</th>
                            <th>Fecha registro</th>
                        </tr>
                    </tfoot>

                    @foreach ($proveedores[0] as $proveedor)

                        <tr>
                            <td>{{ $proveedor->COD_PROVEEDOR }}</td>
                            <td>{{ $proveedor->NOMBRE_PROV }}</td>
                            <td>{{ $proveedor->CAI }}</td>
                            <td>{{ $proveedor->NUMERO_FIJO }}</td>
                            <td>{{ $proveedor->NUMERO_CELULAR }}</td>
                            <td>{{ $proveedor->CORREO }}</td>
                            <td>{{ $proveedor->RTN }}</td>
                            <td>{{ $proveedor->SITIO_WEB }}</td>
                            <td>{{ $proveedor->USR_REGISTRO }}</td>
                            <td>{{ \Carbon\Carbon::parse(strtotime($proveedor->FEC_REGISTRO))->format('d-m-Y') }}
                            </td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('proveedores/' . $proveedor->COD_PROVEEDOR . '/edit') }}">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ url('proveedores/' . $proveedor->COD_PROVEEDOR ) }}">Consultar</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('proveedores', $proveedor->COD_PROVEEDOR) }}">
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

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
