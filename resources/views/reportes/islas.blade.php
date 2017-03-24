@extends ('master')
@section('head')
    <title>Sacos Guano por Islas</title>
@stop

@section('content')

	@if(isset($results))
		<div class="page-header row">
			<div class="pull-left col-sm-6">
				@if ($data__year === '%2%')
				    <h1>Sacos de Guano por Isla</h1>
				@else
					<h1>Sacos de Guano por Isla del año {{ $data__year }}</h1>
				@endif
			</div>
			<div class="col-sm-6 pull-right">
				<form class="form-inline text-right" method="POST" action="/reportes/islas">
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
							<li><a href="{{ URL::to('reportes/islas/xlsx') }}">Excel</a></li>
							<li><a href="{{ URL::to('reportes/islas/csv') }}">CSV</a></li>
						</ul>
					</div>
				  @endif
				</form>
			</div>
		</div>

		<table class="table table-hover table-bordered table-striped table-condensed">
			<thead>
				<tr>
					<th>Isla</th>
					<th>Total (sacos)</th>
					<th>Toneladas (t)</th>
					<th>Año</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($results as $isla)
					<tr>
						<td>{{ $isla->provieneVen }}</td>
						<td class="text-right">{{ $isla->total }}.00</td>
						<td class="text-right">{{ $isla->toneladas }}.00</td>
						<td class="text-center">{{ $isla->ano_eje }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<div class="page-header row">
			<div class="pull-left col-sm-6">
				<h1>Sacos de Guano por Isla</h1>
			</div>
			<div class="col-sm-6 pull-right">
				<form class="form-inline text-right" method="POST" action="/reportes/islas">
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
							<li><a href="{{ URL::to('reportes/islas/xlsx') }}">Excel</a></li>
							<li><a href="{{ URL::to('reportes/islas/csv') }}">CSV</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>

		<table class="table table-hover table-bordered table-striped table-condensed">
			<thead>
				<tr>
					<th>Isla</th>
					<th>Total (sacos)</th>
					<th>Toneladas (t)</th>
					<th>Año</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($islas as $isla)
					<tr>
						<td>{{ $isla->provieneVen }}</td>
						<td class="text-right">{{ $isla->total }}.00</td>
						<td class="text-right">{{ $isla->toneladas }}.00</td>
						<td class="text-center">{{ $isla->ano_eje }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop