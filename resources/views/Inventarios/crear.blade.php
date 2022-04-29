@extends('adminlte::page')

@section('title', 'invetario')

@section('content_header')
    <h1>Agregar Nuevo Producto</h1>
@stop

@section('content')
    <div class="container-fluid">
        <form action="{{ url('inventario') }}" method="post">
            @csrf()
            <div class="card col-10">
                <div class="card-body col-10">

                    <div class="form-group">

                        <div class="col-5">

                            <label class="text-danger"> *Proveedores</label>
                            <div ><select class="form-control input-sm" id="PI_COD_PROVEEDOR" name="PI_COD_PROVEEDOR" required  >

                                  <option value="1" >comercial Fuentes</option>
                                  <option value="2" >comercial pecas</option>

                                </select></div>
                    </div>

                            <div class="col-5">

                                <label class="text-danger"> *Categoria</label>
                                <div ><select class="form-control input-sm" id="PI_COD_CATEGORIA" name="PI_COD_CATEGORIA" required  >
                                      <option value="1" >Medicamentos</option>
                                      <option value="3" >Utencilios</option>
                                      <option value="4" >Aseo</option>
                                      <option value="3" >Equipo de oficina</option>
                                    </select></div>
                        </div>


                        <label class="text-danger"> * Descripcion de producto</label>
                        <input type="text" class="form-control" name="PV_NOMBRE_PRODUCTO" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Marca de Producto</label>
                        <input type="text" class="form-control" name="PV_MARCA" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Contenido neto</label>
                        <input type="text" class="form-control" name="PV_CONTENIDO_NETO"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Tipo de empaque</label>
                        <input type="text" class="form-control" name="PV_TIPO_EMPAQUE" pattern="^[\p{L} \.'\-]+$"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Codigo de barras</label>
                        <input type="text" class="form-control" name="PV_CODIGO_BARRAS"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Cantidad de unidades de compra</label>
                        <input type="text" class="form-control" name="PI_CANTIDAD_UNITARIA"
                            title="Solo puede ingresar letras" maxlength="50" required>

                        <label class="text-danger"> * Precio Por unidad</label>
                        <input type="text" class="form-control" name="PD_PRECIO_UNITARIO"
                            title="Solo puede ingresar letras" maxlength="50" required>

                            <label class="text-danger"> * Precio con destino a venta</label>
                        <input type="text" class="form-control" name="PD_PRECIO_VENTA"
                            title="Solo puede ingresar letras" maxlength="50" required>

                         <label class="text-danger"> * Costo total </label>
                         <input type="text" class="form-control" name="PD_COSTO_TOTAL"
                                title="Solo puede ingresar letras" maxlength="50" required>

                                <label class="text-danger"> *Impuesto</label>
                                <input type="text" class="form-control" name="PD_ISV"
                                    title="Solo puede ingresar letras" maxlength="50" required>

                                    <label class="text-danger"> * Estado </label>
                                    <input type="text" class="form-control" name="PV_ESTADO" pattern="^[\p{L} \.'\-]+$"
                                        title="Solo puede ingresar letras" maxlength="50" required>

                                        <label class="text-danger"> * Imagen</label>
                                        <input type="text" class="form-control" name="PV_IMAGEN" pattern="^[\p{L} \.'\-]+$"
                                            title="Solo puede ingresar letras" maxlength="50" required>

                    </div>

                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Guardar" />
                    <a class="btn btn-dark" href="{{ url('citas') }}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop



