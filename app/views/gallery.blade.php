@extends('layouts.master')
@section('contenido')
<div class="row">
	<div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2">
		<ul class="bxslider">
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-001-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/01.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-002-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/02.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-003-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/03.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-004-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/04.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-006-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/06.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-007-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/07.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-008-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/08.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-009-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/09.jpg')}}" alt="" /></li>
				</a>
			<li>
				<a class="fancybox" rel="gallery1" href="{{url('img/slider/Inkanto-010-ph-Giuseppe-Macor.jpg')}}" title="">
					<img src="{{url('img/slider/thumb/10.jpg')}}" alt="" /></li>
				</a>
		</ul>
	</div>
</div>
@stop

@section('scripts')
<link href="{{url('css/jquery.bxslider.css')}}" rel="stylesheet">
<link href="{{url('css/jquery.fancybox.css')}}" rel="stylesheet">
<script src="{{url('js/jquery.bxslider.min.js')}}"></script>
<script src="{{url('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{url('js/galeria.js')}}"></script>
@stop
