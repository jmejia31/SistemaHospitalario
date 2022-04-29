@extends('adminlte::page')

@section('title', 'inventario')

@section('content_header')
    <h1>Inventario</h1>
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
        <div >
            <div class="table-responsive">
                <a class="btn btn-success" href="{{ url('inventario/create') }}">Agregar nuevo <span
                        class="fa fa-plus-circle"></span></a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-sm table-striped table-hover table-bordered">
                    <thead style="background-color: #3b83bd;color: white; font-weight: bold;">
                        <tr>
                            <th>Codigo de producto</th>
                            <th>Descripcion de producto</th>
                            <th>Marca</th>
                            <th>Contenido neto</th>
                            <th>Tipo de empaque</th>
                            <th>Codigo de barras</th>
                            <th>Cantidad de Existencia</th>
                            <th>Precio por unidad</th>
                            <th>Precio para la venta</th>
                            <th>Costo total de compra</th>
                            <th>Impuesto</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                        <tr>
                            <th>Codigo de producto</th>
                            <th>Descripcion de producto</th>
                            <th>Marca</th>
                            <th>Contenido neto</th>
                            <th>Tipo de empaque</th>
                            <th>Codigo de barras</th>
                            <th>Cantidad de Existencia</th>
                            <th>Precio por unidad</th>
                            <th>Precio para la venta</th>
                            <th>Costo total de compra</th>
                            <th>Impuesto</th>
                            <th>Editar</th>

                            <th>Eliminar</th>

                        </tr>
                    </tfoot>

                    @foreach ($inventario[0] as $resulproducto)
                        <tr>
                            <td>{{ $resulproducto->COD_PRODUCTO }}</td>
                            {{-- <td>{{ $resulproducto->COD_CATEG }}</td>
                            <td>{{ $resulproducto->COD_PROVEEDOR }}</td> --}}
                            <td>{{ $resulproducto->DESCRIPCION_PRODUCTO }}</td>
                            <td>{{ $resulproducto->MARCA }}</td>
                            <td>{{ $resulproducto->CONTENIDO_NETO }}</td>
                            <td>{{ $resulproducto->TIPO_DE_EMPAQUE }}</td>
                            <td>{{ $resulproducto->CODIGO_DE_BARRAS }}</td>
                            <td>{{ $resulproducto->CANTIDAD_UNITARIA }}</td>
                            <td>{{ $resulproducto->PRECIO_UNITARIO }}</td>
                            <td>{{ $resulproducto->PRECIO_VENTA }}</td>
                            <td>{{ $resulproducto->COSTO_TOTAL }}</td>
                            <td>{{ $resulproducto->ISV }}</td>

                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('inventario/' .$resulproducto->COD_PRODUCTO. '/edit') }}">Editar</a>
                            </td>
                            {{-- <td>
                                <a class="btn btn-primary"
                                    href="{{ url('inventario/' .$resulproducto->COD_PRODUCTO. '/Consultar') }}">Consultar</a>
                            </td> --}}
                            <td>
                                <form method="post" action="{{ url('inventario', $resulproducto->COD_PRODUCTO) }}">
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
    <script>
        $('#registros').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection


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
