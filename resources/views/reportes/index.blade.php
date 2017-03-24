@extends ('master')
@section('head')
    <title>Reporte de Sacos</title>
@stop

@section('content')
	<div class="row"> 
		<div class="col-sm-6 col-md-3"> 
			<div class="thumbnail">  
				<div class="caption"> 
					<h3>Producción de Sacos por Mes</h3> 
					<!-- Split button -->
					<div class="btn-group">
					  <a type="button" class="btn btn-success" href="{{ URL::to('reportes/meses/') }}">Reporte</a>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ URL::to('reportes/meses/xlsx') }}">Exportar a Excel</a></li>
						<li><a href="{{ URL::to('reportes/meses/csv') }}">Exportar a CSV</a></li>
					  </ul>
					</div>
				</div> 
			</div> 
		</div>
		<div class="col-sm-6 col-md-3"> 
			<div class="thumbnail">  
				<div class="caption"> 
					<h3>Despacho de Guano por Departamento</h3> 
					<!-- Split button -->
					<div class="btn-group">
					  <a type="button" class="btn btn-success" href="{{ URL::to('reportes/departamentos/') }}">Reporte</a>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ URL::to('reportes/departamentos/xlsx') }}">Exportar a Excel</a></li>
						<li><a href="{{ URL::to('reportes/departamentos/csv') }}">Exportar a CSV</a></li>
					  </ul>
					</div>
				</div> 
			</div> 
		</div>
		<div class="col-sm-6 col-md-3"> 
			<div class="thumbnail">  
				<div class="caption"> 
					<h3>Sacos de Guano por Segmento</h3> 
					<!-- Split button -->
					<div class="btn-group">
					  <a type="button" class="btn btn-success" href="{{ URL::to('reportes/segmentos/') }}">Reporte</a>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ URL::to('reportes/segmentos/xlsx') }}">Exportar a Excel</a></li>
						<li><a href="{{ URL::to('reportes/segmentos/csv') }}">Exportar a CSV</a></li>
					  </ul>
					</div>
				</div> 
			</div> 
		</div>
		<div class="col-sm-6 col-md-3"> 
			<div class="thumbnail">  
				<div class="caption"> 
					<h3>Sacos de Guano por Isla</h3> 
					<!-- Split button -->
					<div class="btn-group">
					  <a type="button" class="btn btn-success" href="{{ URL::to('reportes/islas/') }}">Reporte</a>
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ URL::to('reportes/islas/xlsx') }}">Exportar a Excel</a></li>
						<li><a href="{{ URL::to('reportes/islas/csv') }}">Exportar a CSV</a></li>
					  </ul>
					</div>
				</div> 
			</div> 
		</div>
	</div>
@stop