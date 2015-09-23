<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>cucina peruviana</title>
		<meta name="description" content="cucina peruviana in Milano">
		<link rel="canonical" href="{{url()}}">
		<meta itemprop="image" content="">
		<meta itemprop="description" content="cucina peruviana in Milano">
		<meta itemprop="name" content="cucina peruviana">
		<!--meta property="fb:app_id" content="123456789"-->
		<meta property="og:site_name" content="cucina peruviana">
		<meta property="og:title" content="cucina peruviana">
		<meta property="og:url" content="{{url()}}">
		<meta property="og:type" content="website">
		<meta property="og:description" content="cucina peruviana in Milano">
		<meta property="og:image" content="">
		<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('css/main.css')}}" rel="stylesheet">
		<script src="{{url('js/queryloader2.min.js')}}"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#fff",
					backgroundColor:"#360d01",
					percentage:false,
					barHeight: 1,
					minimumTime:200,
					maxTime:30000,
					fadeOutTime:1000
				});
			});
		</script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url('js/jquery.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		@yield('scripts')
		<script src="{{url('js/main.js')}}"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-67964600-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body class="{{$clase}}">
		<h1 class="hidden">cucina peruviana</h1>
		<nav class="navbar navbar-default navbar-inverse visible-xs">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url()}}">cucina peruviana</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="{{url()}}">
								HOME <span class="sr-only">(current)</span>
							</a>
						</li>
						<li>
							<a href="{{URL('il-ristorante')}}">
								IL RISTORANTE
							</a>
						</li>
						<li>
							<a href="{{URL()}}/la-cucina-peruviana">
								LA CUCINA PERUVIANA
							</a>
						</li>
						<li>
							<a href="{{URL('il-menu')}}">
								IL MENÚ
							</a>
						</li>
						<li>
							<a href="{{URL('gallery')}}">
								GALLERY
							</a>
						</li>
						<li>
							<a href="{{URL('prenota')}}">
								PRENOTA
							</a>
						</li>
						<li>
							<a href="{{URL('contatti')}}">
								CONTATTI
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid no-gutter">
			@if (Request::is('home'))
			<section class="cabecera hidden-xs">
				<div class="container">
					<h2 class="text-right">
						RISTORANTE PERUVIANO
					</h2>
					<div class="bienvenida">
						<p>
							<img src="{{url('img/logo.png')}}" alt="" class="img-responsive pull-right logo">
						</p>
						<div class="clearfix"></div>
						<p class="text-right">
							Via Emilio Gola 4,  Milano - 20143<br>
							Tel: +39 02.83631695<br>
							Cell: +39 340.5277352<br>
							info@inkanto.eu / www.inkanto.eu<br>
							Lunedí chiuso
						</p>
					</div>
				</div>
			</section>
			<section class="container cabecera-responsive visible-xs">
				<p>
					<img src="{{url('img/logo.png')}}" alt="" class="img-responsive center-block">
				</p>
				<p class="text-center">
					<br><br>
					Via Emilio Gola 4,  Milano - 20143<br>
					Tel: +39 02.83631695<br>
					Cell: +39 340.5277352<br>
					info@inkanto.eu / www.inkanto.eu<br>
					Lunedí chiuso
				</p>
			</section>
			@else
			<section class="cabecera hidden-xs">
				<div class="container">
					<h2 class="text-right">
						RISTORANTE PERUVIANO
					</h2>
					<div class="bienvenida">
						<p>
							<img src="{{url('img/logo.png')}}" alt="" class="img-responsive pull-right logo">
						</p>
						<div class="clearfix"></div>
						<p class="text-right">
							<a href="{{url('il-ristorante')}}">
								
							</a><br>
							<a href="{{url('la-cucina-peruviana')}}">
								
							</a><br>
							<a href="{{url('il-menu')}}">
								
							</a><br>
							<a href="{{url('gallery')}}">
								
							</a><br>
							<a href="{{url('prenota')}}">
								
							</a><br>
							<a href="{{url('contatti')}}">
								
							</a><br>
						</p>
					</div>
				</div>
			</section>
			@endif
		</div>
		<div class="container-fluid" role="main">
			<div class="container principal">
				@yield('contenido')
			</div>
		</div>
		@if (!Request::is('home'))
		<div class="container-fluid no-gutter">
			<footer>
				<p class="text-center">
					ORARI DI APERTURA<br>
					Lunedì Chiuso.<br>
					Dal martedì al Giovedì dalle 18 alle 24<br>
					Venerdì dalle 18 all' 1<br>
					SABATO (Pranzo) dalle 12 alle 14:30<br>
					SABATO (Cena) dalle 18 all'1<br>
					DOMENICA dalle 11 alle 17
				</p>
				<div id="map"></div>
				<p class="text-center">
					<a href="https://www.google.it/maps/place/Via+Emilio+Gola,+4,+20143+Milano/@45.4456308,9.1901226,15z/data=!4m2!3m1!1s0x4786c3f78fc6280f:0xb8178fc1d51db17c" target="_blank">
						Via Emilio Gola, 4 Milano 20143
					</a><br>
					Tel: +39 02.83631695<br>
					Cell: +39 340.5277352<br>
					E-mail: <a href="mailto:info@inkanto.eu">
						info@inkanto.eu
					</a>
				</p>
			</footer>
		</div>
		@endif
	</body>
</html>