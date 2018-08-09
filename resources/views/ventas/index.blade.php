@extends ('master')
@section('head')
    <title>Consulta de Sacos</title>
@stop

@section('content')
<form method="POST" action="ventas">
	{{ csrf_field() }}
	<ul class="list-inline">
		<label for="cus">Consulta de Sacos</label>
		
		<li>
			<div class="form-group">
		    	<input type="text" class="form-control" id="cusPre" name="cusPre">
		  	</div>
	  	</li>
	  	
	  	<li>
			<div class="form-group">
		    	<input type="text" class="form-control" id="cusPost" name="cusPost">
		  	</div>
	  	</li>
	</ul>
	<div class="form-group">
  		<button type="submit" class="btn btn-info">Buscar</button>
  	</div>

  	@if(count($errors))
  		<div class="form-group">
  			<div class="alert alert-danger">
  				<ul>
  					@foreach ($errors->all() as $error)
  						<li>{{ $error }}</li>
  					@endforeach
  				</ul>
  			</div>
  		</div>
  	@endif
</form>
@stop