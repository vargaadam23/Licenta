<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<script src="{{asset('js/jquery-.js')}}"></script>
<style>
	.logins{
		font-size: 10px;
	}
</style>
</head>
<body>


<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="/" class="navbar-brand brand"> Birouauto </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="/">Home</a></li>
				<li class="propClone"><a href="/documente">Documente</a></li>
				<li class="propClone"><a href="/informatii">Informatii</a></li>
				<li class="propClone"><a href="/chat">Asigurare</a></li>
				<li style="margin-right:35px" class="propClone"><a href="/feedback">Contact</a></li>

				@if(Auth::check())
				<li ><a style="font-size: 15px;" href="">{{Auth::user()->email}}</a></li>
				<li ><a style="font-size: 15px;" href="/logout">Logout</a></li>
				@else
				<li ><a style="font-size: 15px;" href="/login">Login</a></li>
				<li><a style="font-size: 15px;" href="/register">Registrare</a></li>
				@endif
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						 Birou auto online
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 Documente, informatii si asigurari
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<div style="padding: 50px;">
<hr class="my-4">	
@yield('content')
</div>


<div class="footer text-center">
	<div class="container">
		<div class="row">
			
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; 2021 BIROUAUTO<br/>
			</p>
		</div>
	</div>
</div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/anim.js')}}"></script>

<script>
	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>