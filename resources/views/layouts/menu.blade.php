<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ENAFA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"> <img src="logo.jpg" width="25%"> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('app')}}" class="nav-link">Accueil</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('shop')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<!-- <a class="dropdown-item"  href="shop.html">Elevage</a>
              	<a class="dropdown-item" href="wishlist.html">Agriculture</a>
                <a class="dropdown-item" href="product-single.html">Artisanat</a>
                <a class="dropdown-item" href="cart.html">Commrece général</a> -->
                <!-- <a class="dropdown-item" href="checkout.html">Checkout</a> -->
              </div>
             </li>
	          <li class="nav-item"><a href="{{url('cart')}}" class="nav-link">Cart</a></li>
	          <li class="nav-item"><a href="{{url('checkout')}}" class="nav-link">Checkout</a></li>
	          <li class="nav-item"><a href="{{url('fournisseur')}}" class="nav-link">Fournisseur</a></li>
	          <li class="nav-item cta cta-colored"><a href="{{url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    @section('content')
    @endsection
    </body>
</html>