<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>Aimeos on Laravel</title>

	@yield('aimeos_styles')

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="/css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light">
		<a class="navbar-brand" href="/">
			<img src="logo.jpg" height="120" title="Aimeos Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				@if (Auth::guest())
					<li class="nav-item navbar-text"><a class="nav-link" href="/login">Login</a></li>
					<li class="nav-item navbar-text"><a class="nav-link" href="/register">Register</a></li>
				@else
					<li class="nav-item navbar-text dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Profile</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a href="javascript: document.getElementById('logout').submit();">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
			
		</div> -->
		<div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('app')}}" class="nav-link">Accueil</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('shop')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	 <a class="dropdown-item"  href="shop.html">Elevage</a>
              	<a class="dropdown-item" href="wishlist.html">Agriculture</a>
                <a class="dropdown-item" href="product-single.html">Artisanat</a>
                <a class="dropdown-item" href="cart.html">Commrece général</a> 
                
              </div>
             </li>
	          <li class="nav-item"><a href="{{url('cart')}}" class="nav-link">Cart</a></li>
	          <li class="nav-item"><a href="{{url('checkout')}}" class="nav-link">Checkout</a></li>
	          <li class="nav-item"><a href="{{url('fournisseur')}}" class="nav-link">Fournisseur</a></li>
	          <li class="nav-item cta cta-colored"><a href="{{url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
			@yield('aimeos_head')
	      </div>
	</nav>

	
    <div class="container">
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>

	@yield('aimeos_scripts')

	</body>
</html>
