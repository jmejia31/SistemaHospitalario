@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="{{ url('inventario/create') }}">Crear</a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                   {{-- // {{dd($inventario[0])}} --}}
                    <tr>
                        <th>#</th>
                        <th>Nombre de la categoria</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($inventario[0] as $resulproducto)
                        <tr>
                            <td>{{ $resulproducto->COD_PRODUCTO }}</td>
                            <td>{{ $resulproducto->COD_CATEG }}</td>
                            <td>{{ $resulproducto->COD_PROVEEDOR }}</td>
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
                            <td>{{ $resulproducto->ESTADO }}</td>
                            <td>{{ $resulproducto->IMAGEN }}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('inventario/' . $resulproducto->COD_PRODUCTO . '/edit') }}">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ url('inventario/' . $resulproducto->COD_PRODUCTO) }}">Consultar</a>
                            </td>
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
