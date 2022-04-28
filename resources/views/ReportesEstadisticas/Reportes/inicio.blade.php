@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="container-fluid">
    <div class="row mb-10">
        <div class="container-fluid">
            <!--AQUI INICIA EL CONTENIDO-->
            <br>
            <h1 id="1" align="center">
                <FONT FACE="times new roman">Generar Reportes&nbsp;</font>
            </h1>

            <div class="card">
                <div class="card-header">
                    Reportes
                </div>
                <div class="card-body">
                    <form id="frmnuevo">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <p>Tipo de reporte</p>
                                <select name="tipo_reporte" id="tiporeporte" value="" class="form-control"
                                    onchange="TipoReporte(event);">
                                    <option selected disabled value="0">Seleccione...</option>
                                    <option value="1">Reporte de citas</option>
                                    <option value="2">Reporte de Pacientes</option>
                                </select>
                            </div>
                        </div>
                        <a class="btn btn-primary" id="btnGenerar">Generar</a>

                    </form>

                    <script type="text/javascript">
                    function TipoReporte(e) {
                        var Seleccion = document.getElementById("tiporeporte").value;
                        let Control = document.getElementById("btnGenerar");

                        if (Seleccion == 1) {
                            Control.href = "{{route('VerPdf.Citas')}}";
                        }

                        if (Seleccion == 2) {
                            Control.href = "{{route('VerPdf.Pacientes')}}";
                        }

                    }
                    </script>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
</div>



<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>

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