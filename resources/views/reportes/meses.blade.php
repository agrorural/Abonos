@extends ('master')
@section('head')
    <title>Producción de Sacos por Mes</title>
@stop

@section('content')

	@if(isset($results))
		<div class="page-header row">
			<div class="pull-left col-sm-6">
				@if ($data__year === '%2%')
				    <h1>Producción de Sacos por Mes</h1>
				@else
					<h1>Producción de Sacos por Mes del año {{ $data__year }}</h1>
				@endif
			</div>
			<div class="col-sm-6 pull-right">
				<form class="form-inline text-right" method="POST" action="/reportes/meses">
				{{ csrf_field() }}
				  <div class="form-group">
				    <label for="name">Año</label>
				    <select class="form-control" name="year">
				    	<option value="%2%">Todos</option>
				    	@foreach($years as $year)
				    		<option value="{{ $year->ano_eje }}">{{ $year->ano_eje }}</option>
				    	@endforeach
					</select>
				  </div>
				  <button type="submit" class="btn btn-default">Filtrar</button>

				  @if ($data__year === '%2%')
				  	<div class="btn-group">
						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Exportar <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="{{ URL::to('reportes/meses/xlsx') }}">Excel</a></li>
							<li><a href="{{ URL::to('reportes/meses/csv') }}">CSV</a></li>
						</ul>
					</div>
				  @endif
				</form>
			</div>
		</div>

		<table class="table table-hover table-bordered table-striped table-condensed">
			<thead>
				<tr>
					<th>Año</th>
					<th>Mes</th>
					<th>Total (sacos)</th>
					<th>Toneladas (t)</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($results as $mes)
					<tr>
						<td class="text-center">{{ $mes->ano_eje }}</td>
						<td class="text-center">{{ $mes->mes_eje }}</td>
						<td class="text-right">{{ $mes->total }}.00</td>
						<td class="text-right">{{ $mes->toneladas }}.00</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<div class="page-header row">
			<div class="pull-left col-sm-6">
				<h1>Producción de Sacos por Mes</h1>
			</div>
			<div class="col-sm-6 pull-right">
				<form class="form-inline text-right" method="POST" action="/reportes/meses">
				{{ csrf_field() }}
				  <div class="form-group">
				    <label for="name">Año</label>
				    <select class="form-control" name="year">
				    	<option value="%2%">Todos</option>
				    	@foreach($years as $year)
				    		<option value="{{ $year->ano_eje }}">{{ $year->ano_eje }}</option>
				    	@endforeach
					</select>
				  </div>
				  <button type="submit" class="btn btn-default">Filtrar</button>
					<div class="btn-group">
						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Exportar <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="{{ URL::to('reportes/meses/xlsx') }}">Excel</a></li>
							<li><a href="{{ URL::to('reportes/meses/csv') }}">CSV</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>

		<table class="table table-hover table-bordered table-striped table-condensed">
			<thead>
				<tr>
					<th>Año</th>
					<th>Mes</th>
					<th>Total (sacos)</th>
					<th>Toneladas (t)</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($meses as $mes)
					<tr>
						<td class="text-center">{{ $mes->ano_eje }}</td>
						<td class="text-center">{{ $mes->mes_eje }}</td>
						<td class="text-right">{{ $mes->total }}.00</td>
						<td class="text-right">{{ $mes->toneladas }}.00</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop