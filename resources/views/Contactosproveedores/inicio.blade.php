@extends('adminlte::page')

@section('title', 'Contactos Proveedores')

@section('content_header')
    <h1>Contacto proveedor</h1>
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
                <a class="btn btn-success" href="{{ url('contactos/create') }}">Agregar nuevo <span class="fa fa-plus-circle"></span></a>
            </div>
            <div class="card-body">
                <table id="registros" class="table table-sm table-striped table-hover table-bordered" style="width:100%">
                    <thead style="background-color: #3b83bd;color: white; font-weight: bold;">
                    <tr>
                        <th>Codigo de contacto proveedor</th>
				        <th>Codigo de proveedor</th>
				        <th>Primer nombre</th>
                        <th>Segundo nombre</th>
        				<th>Primer apellido</th>
		        		<th>Segundo apellido</th>
                        <th>Identidad</th>
			        	<th>Número de celular</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Editar</th>
                        <th>Consultar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                    <tr>
                        <th>Codigo de contacto proveedor</th>
				        <th>Codigo de proveedor</th>
				        <th>Primer nombre</th>
                        <th>Segundo nombre</th>
        				<th>Primer apellido</th>
		        		<th>Segundo apellido</th>
                        <th>Identidad</th>
			        	<th>Número de celular</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Editar</th>
                        <th>Consultar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>

                    @foreach ($contactos[0] as $contacto)
                        <tr>
                            <td>{{ $contacto->COD_CONTAC_PROVEEDOR }}</td>
                            <td>{{ $contacto->COD_PROVEEDOR }}</td>
                            <td>{{ $contacto->PRIMER_NOMBRE }}</td>
                            <td>{{ $contacto->SEGUNDO_NOMBRE }}</td>
                            <td>{{ $contacto->PRIMER_APELLIDO }}</td>
                            <td>{{ $contacto->SEGUNDO_APELLIDO }}</td>
                            <td>{{ $contacto->IDENTIDAD }}</td>
                            <td>{{ $contacto->NUMERO_CELULAR }}</td>
                            <td>{{ $contacto->CORREO }}</td>
                            <td>{{ $contacto->DIRECCION }}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ url('contactos/' . $contacto->COD_CONTAC_PROVEEDOR . '/edit') }}">Editar</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('contactos', $contacto->COD_CONTAC_PROVEEDOR) }}">
                                    @csrf()
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
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
