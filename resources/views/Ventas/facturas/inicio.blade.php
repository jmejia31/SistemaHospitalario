@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver las ventas</h1>
@stop

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
                  <a class="btn btn-primary" href="{{url('verventas', $verventa->COD_VENTA)}}">Ver</a>
              </td>
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



@stop


@section('css')
@stop
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



@section('js')
    <script> console.log('Hi!'); </script>
@stop
