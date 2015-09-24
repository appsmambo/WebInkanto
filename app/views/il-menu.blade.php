@extends('layouts.master')
@section('contenido')
<div class="row">
	<div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2">
		<h4 class="text-center">
			IL MENU
		</h4>
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('img/menu-pescados.png')}}" alt="" class="center-block img-responsive">
			</div>
			<div class="col-sm-4">
				<img src="{{url('img/menu-pastas.png')}}" alt="" class="center-block img-responsive">
			</div>
			<div class="col-sm-4">
				<img src="{{url('img/menu-arroces.png')}}" alt="" class="center-block img-responsive">
			</div>
		</div>
		<p class="hidden-xs">
			<br><br>
		</p>
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('img/menu-postres.png')}}" alt="" class="center-block img-responsive">
			</div>
		</div>
	</div>
</div>
@stop