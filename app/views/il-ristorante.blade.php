@extends('layouts.master')
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
		var mapCanvas = document.getElementById('map');
		var mapOptions = {
			center: new google.maps.LatLng(45.449034, 9.176668),   //,,19z
			zoom: 19,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions)
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop
@section('contenido')
<div class="row">
	<div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2">
		<div class="row">
			<div class="col-sm-6 col-md-7">
				<p class="text-right">
					Il ristorante nasce nel 2009 dal sogno di due peruviani, Sheilla e Cesar, con l'obiettivo di diffondere la cucina peruviana in Italia.
				</p>
				<p class="text-right">
					Siamo professionisti nel campo della ristorazione e gestiamo responsabilmente i nostri prodotti, aderendo ad elevati standard di manipolazione degli alimenti e l'uso di ingredienti di prima qualità.
				</p>
				<p class="text-right">
					Rispettiamo l'originalità delle ricette riproponendo fedelmente i nostri piatti come vuole la tradizione peruviana ma aggiungiamo anche un pizzico di innovazione introducendo ingredienti nuovi per creazioni culinarie che soddisfino i gusti dei nostri ospiti.
				</p>
				<p class="text-right">
					Ci impegniamo al 100% per soddisfare le nostre.
				</p>
			</div>
			<div class="col-sm-6 col-md-5">
				<p>
					<img src="{{url('img/il-restorante.jpg')}}" alt="" class="pull-left img-responsive">
				</p>
			</div>
		</div>
	</div>
</div>
@stop