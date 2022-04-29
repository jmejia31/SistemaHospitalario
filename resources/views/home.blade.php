@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

    <h1>Inicio</h1>
    <div class="col-20" style="width: 100%;" >

        <br>


        <!--llamado de la tabla -->
      <div >

      <div class="row">
<div class="col-lg-6 col-12">
<!-- small box -->
<div style="height: 200px;"  class="small-box bg-info">
<div class="inner">
<h3>150</h3>

<p style="font-size: 30px;" >Inventario</p>
</div>
<div class="icon">
<i style="font-size: 150px;"  class="ion ion-bag"></i>
</div>
<br>
<a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
<!-- small box -->
<div style="height: 200px;"  class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>

<p style="font-size: 30px;" >  Ventas</p>
</div>
<div class="icon">
<i style="font-size: 150px;"  class="ion ion-stats-bars"></i>
</div>
<br>
<a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
<!-- small box -->
<div style="height: 200px;"  class="small-box bg-warning">
<div class="inner">
<h3>44</h3>

<p style="font-size: 30px;" >Usuarios </p>
</div>
<div class="icon">
<i style="font-size: 150px;" class="ion ion-person-add"></i>
</div>
<br>
<a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-12">
<!-- small box -->
<div style="height: 200px;"  class="small-box bg-danger">
<div class="inner">
<h3>65</h3>

<p style="font-size: 30px;" >Reportes</p>
</div>
<div class="icon">
<i style="font-size: 150px;"  class="ion ion-pie-graph"></i>
</div>
<br>
<a href="../Reportes y Estadisticas/Ver Reportes.php" class="small-box-footer">Mas Información  <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>

@stop
