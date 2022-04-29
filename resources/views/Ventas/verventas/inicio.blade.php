
@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Ventas</h1>
@stop
@section('css')

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

@endsection


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

@section('content')
<div class="container-fluid">
    <div class="card">
         <div class="card-body">
            <a class="btn btn-success" href="{{ url('verventas/create') }}">Crear</a>

            <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                <thead style="background-color: #3b83bd;color: white; font-weight: bold;">
                <tr>

                    <th>#</th>
                    {{-- <th>Codigo de inventario</th> --}}
                    <th>Codigo de producto</th>
                    <th>Numero de venta</th>
                    <th>Fecha de Registro</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
    <tr>

        <th>#</th>
        {{-- <th>Codigo de inventario</th> --}}
        <th>Codigo de producto</th>
        <th>Numero de venta</th>
        <th>Fecha de Registro</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>


</tfoot>



                @foreach ($verventas[0] as $verventa )
                <tr>
                 <td>{{$verventa->COD_VENTA}}</td>
                 {{-- <td>{{$verventa->COD_INVENTARIO}}</td> --}}
                 <td>{{$verventa->DESCRIPCION_PRODUCTO}}</td>
                 <td>{{$verventa->NUM_VENTA}}</td>
                 <td>{{\Carbon\Carbon::parse( $verventa->FEC_VENTA)->format('d-m-Y h:i:s ') }}</td>
                 {{-- {{\Carbon\Carbon::parse( $verventa->FEC_VENTA)->format('d-m-Y') }} --}}

              <td>
                  <a class="btn btn-warning" href="{{url('verventas/' . $verventa->COD_VENTA. '/edit')}}">Editar</a>
              </td>

                <td>
                    <form method="post" action="{{ url('verventas', $verventa->COD_VENTA) }}">
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


















{{--





@section('content')
<div class="container-fluid">
    <div class="card">
         <div class="card-body">
            <a class="btn btn-success" href="{{ url('verventas/create') }}">Crear</a>

            <table id="registros" class="table table-bordered table-hover dataTable dtr-inline">
                <tr>

                    <th>#</th>
                    <th>Codigo de inventario</th>
                    <th>Codigo de producto</th>
                    <th>Numero de venta</th>
                    <th>Fecha de venta</th>
                </tr>
                @foreach ($verventas[0] as $verventa )
                <tr>
                 <td>{{$verventa->COD_VENTA}}</td>
                 <td>{{$verventa->COD_INVENTARIO}}</td>
                 <td>{{$verventa->COD_PRODUCTO}}</td>
                 <td>{{$verventa->NUM_VENTA}}</td>
                 <td>{{$verventa->FEC_VENTA}}</td>

              <td>
                  <a class="btn btn-warning" href="{{url('verventas/' . $verventa->COD_VENTA. '/edit')}}">Editar</a>
              </td>
              <td>
                <td>
                    <form method="post" action="{{ url('verventas', $verventa->COD_VENTA) }}">
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



@stop --}}
