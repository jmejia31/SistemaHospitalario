@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Registro de Usuarios</h1>
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
                Registrar Usuario <span class="fa fa-plus-circle"></span>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="registros">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rol</th>
                        <th>Especialidad</th>
                        <th>Usuario</th>
                        <th># Colegiatura</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Identidad</th>
                        <th>Dirección</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Celular</th>
                        <th>Sexo</th>
                        <th>Estado Civil</th>
                        <th>Edad</th>
                        <th>Fecha de nacimiento</th>
                        <th>Fecha de registro</th>
                        <th>Estado</th>
                        <th>Salario</th>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($UsuaArray as $Usuaresultado)
                        <tr>
                            <td>{{ $Usuaresultado->COD_USR }}</td>
                            <td>{{ $Usuaresultado->COD_ROL_USR }}</td>
                            <td>{{ $Usuaresultado->COD_ESPECIALIDAD }}</td>
                            <td>{{ $Usuaresultado->USR_PERS }}</td>
                            <td>{{ $Usuaresultado->NUMERO_COLEGIATURA }}</td>
                            <td>{{ $Usuaresultado->PRIMER_NOMBRE . ' ' . $Usuaresultado->SEGUNDO_NOMBRE }}
                            </td>
                            <td>{{ $Usuaresultado->PRIMER_APELLIDO . ' ' . $Usuaresultado->SEGUNDO_APELLIDO }}
                            </td>
                            <td>{{ $Usuaresultado->NO_IDENTIDAD }}</td>
                            <td>{{ $Usuaresultado->DIR }}</td>
                            <td>{{ $Usuaresultado->EMAIL }}</td>
                            <td>{{ $Usuaresultado->TEL }}</td>
                            <td>{{ $Usuaresultado->CELL }}</td>
                            <td>{{ $Usuaresultado->GEN }}</td>
                            <td>{{ $Usuaresultado->ESTADO_CIVIL }}</td>
                            <td>{{ $Usuaresultado->EDAD }}</td>
                            <td>{{ \Carbon\Carbon::parse(strtotime($Usuaresultado->FEC_NTO))->format('d-m-Y') }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse(strtotime($Usuaresultado->FEC_REG))->format('d-m-Y') }}
                            </td>
                            <td>{{ $Usuaresultado->ESTADO }}</td>
                            <td>{{ $Usuaresultado->SALARIO }}</td>

                            <td style="text-align: center;">
                                <a class="btn btn-warning"
                                    href="{{ url('Usuariocliente/' . $Usuaresultado->COD_USR . '/edit') }}">
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
                    <form action="{{ route('Usuarioshh.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Código del rol:</label>
                                    <input id="PI_COD_ROL_USR" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="number" name="PI_COD_ROL_USR" :value="old('PI_COD_ROL_USR')" autofocus>

                                    @if ($errors->has('PI_COD_ROL_USR'))
                                        <div id="PI_COD_ROL_USR-error" class="error text-danger pl-3" for="PI_COD_ROL_USR"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PI_COD_ROL_USR') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Especialidades:</label>
                                    <input id="PI_COD_ESPECIALIDAD" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="number" name="PI_COD_ESPECIALIDAD" :value="old('PI_COD_ESPECIALIDAD')" autofocus>

                                    @if ($errors->has('PI_COD_ESPECIALIDAD'))
                                        <div id="PI_COD_ESPECIALIDAD-error" class="error text-danger pl-3" for="PI_COD_ESPECIALIDAD"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PI_COD_ESPECIALIDAD') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Usuario:</label>
                                    <input id="PV_USR_PERS" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_USR_PERS" :value="old('PV_USR_PERS')" autofocus>

                                    @if ($errors->has('PV_USR_PERS'))
                                        <div id="PV_USR_PERS-error" class="error text-danger pl-3" for="PV_USR_PERS"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_USR_PERS') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Contraseña:</label>
                                    <input id="PV_PASSWD_PERS" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="password" name="PV_PASSWD_PERS" :value="old('PV_PASSWD_PERS')" autofocus>

                                    @if ($errors->has('PV_PASSWD_PERS'))
                                        <div id="PV_PASSWD_PERS-error" class="error text-danger pl-3" for="PV_PASSWD_PERS"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_PASSWD_PERS') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Repetir contraseña:</label>
                                    <input id="PV_VERIFY_PASSWD_PERS" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="password" name="PV_VERIFY_PASSWD_PERS" :value="old('PV_VERIFY_PASSWD_PERS')" autofocus>

                                    @if ($errors->has('PV_VERIFY_PASSWD_PERS'))
                                        <div id="PV_VERIFY_PASSWD_PERS-error" class="error text-danger pl-3" for="PV_VERIFY_PASSWD_PERS"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_VERIFY_PASSWD_PERS') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Número de colegiatura:</label>
                                    <input id="PV_NUMERO_COLEGIATURA" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_NUMERO_COLEGIATURA" :value="old('PV_NUMERO_COLEGIATURA')" autofocus>

                                    @if ($errors->has('PV_NUMERO_COLEGIATURA'))
                                        <div id="PV_NUMERO_COLEGIATURA-error" class="error text-danger pl-3" for="PV_NUMERO_COLEGIATURA"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_NUMERO_COLEGIATURA') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Primer nombre:</label>
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
                                    <label for="pregunta">Segundo nombre:</label>
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
                                    <label for="pregunta">Primer apellido:</label>
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
                                    <label for="pregunta">Segundo apellido:</label>
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
                                    <label for="pregunta">DNI:</label>
                                    <input id="PV_NO_IDENTIDAD" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_NO_IDENTIDAD" :value="old('PV_NO_IDENTIDAD')" autofocus>

                                    @if ($errors->has('PV_NO_IDENTIDAD'))
                                        <div id="PV_NO_IDENTIDAD-error" class="error text-danger pl-3" for="PV_NO_IDENTIDAD"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_NO_IDENTIDAD') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Correo electrónico:</label>
                                    <input id="PV_EMAIL" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="email" name="PV_EMAIL" :value="old('PV_EMAIL')" autofocus>

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
                                    <label for="pregunta">Número de teléfono:</label>
                                    <input id="PV_TEL" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_TEL"
                                        :value="old('PV_TEL')" autofocus>

                                    @if ($errors->has('PV_TEL'))
                                        <div id="PV_TEL-error" class="error text-danger pl-3" for="PV_TEL"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_TEL') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Número de celular:</label>
                                    <input id="PV_CELL" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="text" name="PV_CELL" :value="old('PV_CELL')" autofocus>

                                    @if ($errors->has('PV_CELL'))
                                        <div id="PV_CELL-error" class="error text-danger pl-3" for="PV_CELL"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_CELL') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Género:</label>
                                    <select id="PE_GEN" class="form-control border-dark" type="text" name="PE_GEN"
                                        :value="old('PE_GEN')" autofocus>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>

                                    @if ($errors->has('PE_GEN'))
                                        <div id="PE_GEN-error" class="error text-danger pl-3" for="PE_GEN"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PE_GEN') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Estado Civil:</label>
                                    <select id="PE_ESTADO_CIVIL" class="form-control border-dark" type="text" name="PE_ESTADO_CIVIL"
                                        :value="old('PE_ESTADO_CIVIL')" autofocus>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viudo">Viudo</option>
                                    </select>

                                    @if ($errors->has('PE_ESTADO_CIVIL'))
                                        <div id="PE_ESTADO_CIVIL-error" class="error text-danger pl-3" for="PE_ESTADO_CIVIL"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PE_ESTADO_CIVIL') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Fecha de nacimiento:</label>
                                    <input id="PD_FEC_NTO" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="date" name="PD_FEC_NTO"
                                        :value="old('PD_FEC_NTO')" autofocus>

                                    @if ($errors->has('PD_FEC_NTO'))
                                        <div id="PD_FEC_NTO-error" class="error text-danger pl-3"
                                            for="PD_FEC_NTO" style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PD_FEC_NTO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Edad:</label>
                                    <input id="PT_EDAD" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="number" name="PT_EDAD" :value="old('PT_EDAD')" autofocus>

                                    @if ($errors->has('PT_EDAD'))
                                        <div id="PT_EDAD-error" class="error text-danger pl-3" for="PT_EDAD"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PT_EDAD') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Salario:</label>
                                    <input id="PD_SALARIO" class="form-control border-dark" placeholder="Ingrese el tipo..."
                                        type="number" name="PD_SALARIO" :value="old('PD_SALARIO')" autofocus>

                                    @if ($errors->has('PD_SALARIO'))
                                        <div id="PD_SALARIO-error" class="error text-danger pl-3" for="PD_SALARIO"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PD_SALARIO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Estado:</label>
                                    <select id="PE_ESTADO" class="form-control border-dark" type="text" name="PE_ESTADO"
                                        :value="old('PE_ESTADO')" autofocus>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>

                                    @if ($errors->has('PE_ESTADO'))
                                        <div id="PE_ESTADO-error" class="error text-danger pl-3" for="PE_ESTADO"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PE_ESTADO') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group has-primary">
                                    <label for="pregunta">Dirección:</label>
                                    <input id="PV_DIR" class="form-control border-dark"
                                        placeholder="Ingrese el tipo..." type="text" name="PV_DIR"
                                        :value="old('PV_DIR')" autofocus>

                                    @if ($errors->has('PV_DIR'))
                                        <div id="PV_DIR-error" class="error text-danger pl-3" for="PV_DIR"
                                            style="display: bock;">
                                            <strong>
                                                {{ $errors->first('PV_DIR') }}
                                            </strong>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 col-xs-12 mb-2">
                                <a href="{{ route('Usuarioshh.index') }}" class="btn btn-danger w-100">Cancelar <i
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
