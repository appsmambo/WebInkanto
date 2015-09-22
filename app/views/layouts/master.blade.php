<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>cucina peruviana</title>
		<meta name="description" content="cucina peruviana in Milano">
		<link rel="canonical" href="{{url()}}/">
		<meta itemprop="image" content="">
		<meta itemprop="description" content="cucina peruviana in Milano">
		<meta itemprop="name" content="cucina peruviana">
		<!--meta property="fb:app_id" content="123456789"-->
		<meta property="og:site_name" content="cucina peruviana">
		<meta property="og:title" content="cucina peruviana">
		<meta property="og:url" content="{{url()}}/">
		<meta property="og:type" content="website">
		<meta property="og:description" content="cucina peruviana in Milano">
		<meta property="og:image" content="">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#222322",
					backgroundColor:"#222322",
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
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/main.js"></script>
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
		<div class="container-fluid" role="main">
			@yield('content')
		</div>
	</body>
</html>