@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Registro de Pacientes</h1>
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
                Registrar Paciente <span class="fa fa-plus-circle"></span>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="registros">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Nacimiento</th>
                        <th>Sexo</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Registro</th>
                        <th>Direccion</th>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($PaciArray as $Paciresultado)
                        <tr>
                            <td>{{ $Paciresultado->COD_PACIENTE }}</td>
                            <td>{{ $Paciresultado->PRIMER_NOMBRE . ' ' . $Paciresultado->SEGUNDO_NOMBRE }}
                            </td>
                            <td>{{ $Paciresultado->PRIMER_APELLIDO . ' ' . $Paciresultado->SEGNDO_APELLIDO }}
                            </td>
                            <td>{{ $Paciresultado->DNI }}</td>
                            <td>{{ \Carbon\Carbon::parse(strtotime($Paciresultado->FEC_NACIMIENTO))->format('d-m-Y') }}
                            </td>
                            <td>{{ $Paciresultado->GENERO }}</td>
                            <td>{{ $Paciresultado->EMAIL }}</td>
                            <td>{{ $Paciresultado->TELEFONO }}</td>
                            <td>{{ $Paciresultado->CELULAR }}</td>
                            <td>{{ \Carbon\Carbon::parse(strtotime($Paciresultado->FEC_REGISTRO))->format('d-m-Y') }}
                            </td>
                            <td>{{ $Paciresultado->DIRECCION }}</td>

                            <td style="text-align: center;">
                                <a class="btn btn-warning"
                                    href="{{ url('Pacientecliente/' . $Paciresultado->COD_PACIENTE . '/edit') }}">
                                    <span class="fa fa-edit"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Registrar nueva venta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Pacienteshh.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Codigo del
                                        usuario:</label>
                                    <input id="PI_COD_USR" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PI_COD_USR" :value="old('PI_COD_USR')" autofocus>

                                    @if ($errors->has('PI_COD_USR'))
                                        <div id="PI_COD_USR-error" class="error text-danger pl-3" for="PI_COD_USR"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PI_COD_USR') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Primer
                                        nombre:</label>
                                    <input id="PV_PRIMER_NOMBRE" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_PRIMER_NOMBRE"
                                        :value="old('PV_PRIMER_NOMBRE')" autofocus>

                                    @if ($errors->has('PV_PRIMER_NOMBRE'))
                                        <div id="PV_PRIMER_NOMBRE-error" class="error text-danger pl-3"
                                            for="PV_PRIMER_NOMBRE" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_PRIMER_NOMBRE') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Segundo
                                        nombre:</label>
                                    <input id="PV_SEGUNDO_NOMBRE" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_SEGUNDO_NOMBRE"
                                        :value="old('PV_SEGUNDO_NOMBRE')" autofocus>

                                    @if ($errors->has('PV_SEGUNDO_NOMBRE'))
                                        <div id="PV_SEGUNDO_NOMBRE-error" class="error text-danger pl-3"
                                            for="PV_SEGUNDO_NOMBRE" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_SEGUNDO_NOMBRE') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Primer
                                        apellido:</label>
                                    <input id="PV_PRIMER_APELLIDO" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_PRIMER_APELLIDO"
                                        :value="old('PV_PRIMER_APELLIDO')" autofocus>

                                    @if ($errors->has('PV_PRIMER_APELLIDO'))
                                        <div id="PV_PRIMER_APELLIDO-error" class="error text-danger pl-3"
                                            for="PV_PRIMER_APELLIDO" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_PRIMER_APELLIDO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Segundo
                                        apellido:</label>
                                    <input id="PV_SEGUNDO_APELLIDO" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_SEGUNDO_APELLIDO"
                                        :value="old('PV_SEGUNDO_APELLIDO')" autofocus>

                                    @if ($errors->has('PV_SEGUNDO_APELLIDO'))
                                        <div id="PV_SEGUNDO_APELLIDO-error" class="error text-danger pl-3"
                                            for="PV_SEGUNDO_APELLIDO" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_SEGUNDO_APELLIDO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Numero del
                                        DNI:</label>
                                    <input id="PV_DNI" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_DNI" :value="old('PV_DNI')" autofocus>

                                    @if ($errors->has('PV_DNI'))
                                        <div id="PV_DNI-error" class="error text-danger pl-3" for="PV_DNI"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_DNI') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Fecha de
                                        nacimiento:</label>
                                    <input id="PD_FEC_NACIMIENTO" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="date" name="PD_FEC_NACIMIENTO"
                                        :value="old('PD_FEC_NACIMIENTO')" autofocus>

                                    @if ($errors->has('PD_FEC_NACIMIENTO'))
                                        <div id="PD_FEC_NACIMIENTO-error" class="error text-danger pl-3"
                                            for="PD_FEC_NACIMIENTO" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PD_FEC_NACIMIENTO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Género:</label>
                                    <select id="PE_GENERO" class="form-control border-dark" type="text" name="PE_GENERO"
                                        :value="old('PE_GENERO')" autofocus>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>


                                    @if ($errors->has('PE_GENERO'))
                                        <div id="PE_GENERO-error" class="error text-danger pl-3" for="PE_GENERO"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PE_GENERO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Correo
                                        electrónico:</label>
                                    <input id="PV_EMAIL" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_EMAIL" :value="old('PV_EMAIL')" autofocus>

                                    @if ($errors->has('PV_EMAIL'))
                                        <div id="PV_EMAIL-error" class="error text-danger pl-3" for="PV_EMAIL"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_EMAIL') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Número de
                                        teléfono:</label>
                                    <input id="PV_TELEFONO" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_TELEFONO"
                                        :value="old('PV_TELEFONO')" autofocus>

                                    @if ($errors->has('PV_TELEFONO'))
                                        <div id="PV_TELEFONO-error" class="error text-danger pl-3" for="PV_TELEFONO"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_TELEFONO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Número de
                                        celular:</label>
                                    <input id="PV_CELULAR" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_CELULAR" :value="old('PV_CELULAR')" autofocus>

                                    @if ($errors->has('PV_CELULAR'))
                                        <div id="PV_CELULAR-error" class="error text-danger pl-3" for="PV_CELULAR"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_CELULAR') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Dirección:</label>
                                    <input id="PV_DIRECCION" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_DIRECCION"
                                        :value="old('PV_DIRECCION')" autofocus>

                                    @if ($errors->has('PV_DIRECCION'))
                                        <div id="PV_DIRECCION-error" class="error text-danger pl-3" for="PV_DIRECCION"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_DIRECCION') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 col-xs-12 mb-2">
                                <a href="{{ route('Pacienteshh.index') }}" class="btn btn-danger w-100">Cancelar <i
                                        class="fa fa-times-circle ml-2"></i>
                                </a>
                            </div>

                            <div class="col-sm-6 col-xs-12 mb-2">
                                <button type="submit" class="btn btn-success w-100">Guardar <i
                                        class="fas fa-check-circle ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
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

            $('#btnAgregarnuevo').click(function() {
                datos = $('#frmnuevo').serialize();

                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "procesos/agregar.php",
                    success: function(r) {
                        if (r == 1) {
                            $('#frmnuevo')[0].reset();
                            $('#tablaDatatable').load('');
                            alertify.success("agregado con exito :D");
                        } else {
                            alertify.error("Fallo al agregar :(");
                        }
                    }
                });
            });


            $('#btnActualizar').click(function() {
                datos = $('#frmnuevoU').serialize();

                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "",
                    success: function(r) {
                        if (r == 1) {
                            $('#tablaDatatable').load('');
                            alertify.success("Actualizado con exito :D");
                        } else {
                            alertify.error("Fallo al actualizar :(");
                        }
                    }
                });

                function agregaFrmActualizar(Cod_expediente) {
                    $.ajax({
                        type: "POST",
                        data: "Cod_expediente=" + Cod_expediente,
                        url: "procesos/obtenDatos.php",
                        success: function(r) {
                            datos = jQuery.parseJSON(r);
                            $('#Cod_expedienteU').val(datos['Cod_expediente']);
                            $('#nombreU').val(datos['nombre']);
                            $('#Fecha_consultaU').val(datos['Fecha_consulta']);
                            $('#TemperaturaU').val(datos['Temperatura']);
                            $('#PresiónU').val(datos['Presión']);
                            $('#Diagnostico_medicoU').val(datos['Diagnostico_medico']);
                            $('#Receta_medicamentoU').val(datos['Receta_medicamento']);
                        }
                    });
                }

                function EliminarDatos(COD_CATEG) {
                    alertify.confirm('Eliminar compra', '¿Estas seguro de eliminar esta compra ',
                        function() {

                            $.ajax({
                                type: "POST",
                                data: "Cod_expediente=" + COD_CATEG,
                                url: "procesos/eliminar.php",
                                success: function(r) {
                                    if (r == 1) {
                                        $('#tablaDatatable').load('tabla.php');
                                        alertify.success("Eliminado con exito !");
                                    } else {
                                        alertify.error("No se pudo eliminar...");
                                    }
                                }
                            });

                        },
                        function() {

                        });
                }
            });

        });
    </script>
@stop
