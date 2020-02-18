<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Lira - Business</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
<!-- HEADER -->
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>55 5138 0939</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>ventasindustriales@lira.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Av Cuitlahuac #17- C. Col. Popotla CDMX</a></li>
					</ul>
					<ul class="header-links pull-right">
						<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
						<li><a href="#"><i class="fa fa-user-o"></i> Iniciar Sesión</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo base_url("Inicio");?>" class="logo">
									<!-- <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""> -->
									<h1>LIRA</h1>
								</a>
							</div>
						</div>
						<!-- /LOGO -->
<?php

if(!empty($listCat))
{
    foreach($listCat as $record)
    {
		echo $record->nombreCategoria;
	}
}
?>
						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select selec-categorias">
										<option value="0">Todas las Categorias</option>
										<?php if(!empty($listCat))
											  {
												foreach($listCat as $item)
    											{
										?>
												<option value="<?php echo $item->idCategoria ?>"><?php echo $item->nombreCategoria ?></option>
										<?php 	}
											  }
									 	?>	
									</select>
									<input class="input" placeholder="Buscar productos, marcas y más...">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!-- <div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div> -->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url(); ?>/assets/img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url(); ?>/assets/img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<?php 
						if(!empty($listMenu))
						{
							foreach($listMenu as $item)
    						{
						?>
						<!---class="active"-->
						<li ><a href="<?php echo base_url().$item->ruta ?>"><?php echo $item->descripcion ?></a></li>
						<?php 
							}
						}
						?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
