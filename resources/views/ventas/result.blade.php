@extends ('master')
	@section('head')
		<title>Dirección de Abonos</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<style>
			html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		#map {
			height: 100%;
			margin-bottom: 20px;
		}
		.container{
			
		}
		.row {
		    margin-left: 0;
		    margin-right: 0;
		}
		dl{
			margin-bottom: 0;
		}
		</style>
	@stop

	@section('content')

	<a href="ventas">Hacer otra busqueda</a>
	<hr />
		@if($venta)
			<div id="map" style="height:500px">	
			</div>
			<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
		   	<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
		    <script>
				function initMap() {	
				  var cusVen = "{{ $venta->cusVen }}";
				  var fecProcVen = "{{ $venta->fecProcVen }}";
				  var fpv = moment(fecProcVen,'YYYY-MM-DD','es').format("DD MMMM YYYY");
				  var provieneVen = "{{ $venta->provieneVen }}";
				  var regionVen = "{{ $venta->regionVen }}";

				  var fecEmbVen = "{{ $venta->fecEmbVen }}";
				  var fev = moment(fecEmbVen,'YYYY-MM-DD','es').format('DD MMMM YYYY');

				  var fecSalidaVen = "{{ $venta->fecSalidaVen }}";
				  var fsv = moment(fecSalidaVen,'YYYY-MM-DD','es').format('DD MMMM YYYY');

				  var fecSalAlmCli = "{{ $venta->fecSalAlmCli }}";
                  var fllv = moment(fecSalAlmCli,'YYYY-MM-DD','es').format('DD MMMM YYYY');
				  
				  var destCli = "{{ $venta->destCli }}";
                  var destLlegadaCli = "{{ $venta->destLlegadaCli }}";
				  var lanchonVen = "{{ $venta->lanchonVen }}";
				  var zonaVen = "{{ $venta->zonaVen }}";
				  var embVen = "{{ $venta->embVen }}";
				  var coordFlotVen = "{{ $venta->coordFlotVen }}";
				  var puertoVen = "{{ $venta->puertoVen }}";
				  var resProdVen = "{{ $venta->resProdVen }}";
				  var admCampVen = "{{ $venta->admCampVen }}";
				  var resAlmVen = "{{ $venta->resAlmVen }}";
                  var resDespVen = "{{ $venta->resDespVen }}";
				  var destVen = "{{ $venta->destVen }}";
				  
				  var estVen = "{{ $venta->estVen }}";

				  var latVen = "{{ $venta->latVen }}"; var latF = parseFloat(latVen);
				  var lngVen = "{{ $venta->lngVen }}"; var lngF = parseFloat(lngVen);
				  var centro = {lat: latF, lng: lngF};

				  var latVen2 = "{{ $venta->latVen2 }}"; var latF2 = parseFloat(latVen2);
                  var lngVen2 = "{{ $venta->lngVen2 }}"; var lngF2 = parseFloat(lngVen2);
                  var centro2 = {lat: latF2, lng: lngF2};

				  var latCli = "{{ $venta->latCli }}"; var latF3 = parseFloat(latCli);
                  var lngCli = "{{ $venta->lngCli }}"; var lngF3 = parseFloat(lngCli);
                  var centro3 = {lat: latF3, lng: lngF3};
				  
				  var flightPlanCoordinates = [
					centro,
					centro2,
					centro3
				  ];
				  
				  var lineSymbol = {
					path: google.maps.SymbolPath.FORWARD_OPEN_ARROW,
					scale: 2,
					strokeColor: '#FF0000'
				  };


				  var map = new google.maps.Map(document.getElementById('map'), {
				    zoom: 6,
				    //mapTypeId: google.maps.MapTypeId.TERRAIN,
				    center: centro
				  });
				  
				  switch(estVen) {
						case '0':
							estadoVenta = 'Anulado';
							estadoVentaClase = 'anulado';
							break;
						case '1':
							estadoVenta = 'Vendido';
							estadoVentaClase = 'vendido';
							break;
				  }
				  
				  @if ( is_null( $venta->admCampVen ) )
					var admCampVenClase = 'hidden';
				  @else
				    var admCampVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->zonaVen ) )
					var zonaVenClase = 'hidden';
                  @else
				    var zonaVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->lanchonVen ) )
					var lanchonVenClase = 'hidden';
				  @else
				    var lanchonVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->resProdVen ) )
					var resProdVenClase = 'hidden';
				  @else
				    var resProdVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->embVen ) )
					var embVenClase = 'hidden';
				  @else
				    var embVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->coordFlotVen ) )
					var coordFlotVenClase = 'hidden';
				  @else
				    var coordFlotVenClase = 'show';
				  @endif
				  
				  @if ( is_null( $venta->resDespVen ) )
					var resDespVenClase = 'hidden';
				  @else
				    var resDespVenClase = 'show';
				  @endif

				  var contentString = '<div class="row"><div class="col-sm-3"><h4>' + cusVen + '</h4><p class="' + estadoVentaClase  + '">' + estadoVenta + '</p></div><div class="col-sm-9"><dl class="dl-horizontal"><dt>Proviene de:</dt><dd>' + provieneVen + ', '+ regionVen +'</dd><dt class="' + zonaVenClase + '">Zona:</dt><dd>'+ zonaVen +'</dd><dt class="' + lanchonVenClase + '">Lanchón:</dt><dd>'+ lanchonVen +'</dd><dt class="' + embVenClase + '">Embarcación:<dt><dd>'+ embVen +'</dd><dt class="' + coordFlotVenClase + '">Responsable de Flota:<dt><dd>'+  coordFlotVen +'</dd><dt>Puerto:<dt><dd>'+ puertoVen +'</dd></dl></div></div>';
				  var contentString2 = '<div class="row"><div class="col-sm-12"></div><div class="col-sm-12"><dl><dt class="' + admCampVenClase + '">Admnistrador de Campaña</dt><dd class="' + admCampVenClase + '">' + admCampVen + '</dd><dt>Responsable de Almacén:</dt><dd>' + resAlmVen + '</dd><dt class="' + resDespVenClase + '">Responsable de Despacho:</dt><dd>' + resDespVen + '</dd><dt class="' + resProdVenClase + '">Producción:</dt><dd>'+ resProdVen +'</dd></dl></div></div>';
				  var contentString3 = '<div class="row"><div class="col-sm-12"><dl><dt>Fecha de Salida de Almacén:</dt><dd>' + fllv + '</dd></dl></div><div class="col-sm-12"><dl><dt>Cliente:</dt><dd>' + destCli + '</dd><dt>Destino:</dt><dd>' + destLlegadaCli + '</dd></dl></div></div>';

				  var infowindow = new google.maps.InfoWindow();
				  var infowindow2 = new google.maps.InfoWindow();
				  var infowindow3 = new google.maps.InfoWindow();

				  infowindow.setContent(contentString);
				  infowindow2.setContent(contentString2);
				  infowindow3.setContent(contentString3);
				  
				  var marker = new google.maps.Marker({
				    position: centro,
					label: 'I',
				    animation: google.maps.Animation.DROP,
				    map: map,
				    title: ''
				  });

				var marker2 = new google.maps.Marker({
					position: centro2,
					animation: google.maps.Animation.DROP,
					label: 'A',
					map: map,
					title: ''
				});

				var marker3 = new google.maps.Marker({
					position: centro3,
					animation: google.maps.Animation.DROP,
					label: 'C',
					map: map,
					title: ''
				});
		
				  infowindow.open(map, marker);
				  
				  marker.addListener('click', function() {
				    infowindow.open(map, marker);
				  });

	                         marker2.addListener('click', function() {
	                            infowindow2.open(map, marker2);
                                 });

								marker3.addListener('click', function() {
                                    infowindow3.open(map, marker3);
                                 });

				  //alert(m.toString());
				  
				  var line = new google.maps.Polyline({
					path: flightPlanCoordinates,
					geodesic: true,
					strokeColor: '#FF0000',
					strokeOpacity: 1.0,
					strokeWeight: 2,
					 icons: [{
					  icon: lineSymbol,
					  offset: '100%'
					}],
				  });
				
				  line.setMap(map);
   			      animateCircle(line);
				  function animateCircle(line) {
					var count = 0;
					window.setInterval(function() {
					  count = (count + 1) % 200;
				
					  var icons = line.get('icons');
					  icons[0].offset = (count / 2) + '%';
					  line.set('icons', icons);
				  }, 20);
				}
				}
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_fuWdITZyuwIDlWEw_btA4PAxS6VnXf8&signed_in=true&callback=initMap" async defer></script>
		@else
			No hay resultados
		@endif
	@stop
