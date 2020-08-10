<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta charset="description" content="En Rojas Sport encuentra tu entalle perfecto, tenemos jeans y accesorios para toda la familia, compra desde tu casa, Envío a todo el Perú.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ROJAS CHAVEZ Herbert Marcusse">
	<meta name="theme-color" content="#009688">
	<!-- Icono de la empresa -->
	<link rel="shortcut icon" href="<?php echo media(); ?>/images/favicon.ico">
	<title>RojasSport - <?php echo $data['page_tag'] ?></title>
	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- whatsapp  -->
	<link rel="stylesheet" href="<?php echo media(); ?>/css/whatsapp.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Lightslider -->
	<link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/lightslider.css">
	<!-- google fonst -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Roboto';">
	<a href="https://api.whatsapp.com/send?phone=51999385708&text=Hola%20Quisiera%20mas%20informacion" class="float" target="_blank">
		<i class="fa fa-whatsapp my-float"></i>
	</a>
	<nav class="navbar navbar-expand bg-light">
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>">
						<img src="<?php echo media(); ?>/images/logo.png" width="100">
					</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
				<button class="btn btn-outline-success my-2 mr-sm-2" type="submit">Buscar</button>
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Favoritos</button>
			</form>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#" >
						<i class="fa fa-user mr-8"></i> 
						Mi Cuenta
						<i class="fa fa-angle-down ml-8"></i>
					</a>
					<div class="dropdown-menu">
						<a href="login.php" class="dropdown-item">Login</a>
						<a href="#" class="dropdown-item">Crear Cuenta</a>
						<a href="#" class="dropdown-item">¿Olvidaste tu CLave?</a>
						<a href="#" class="dropdown-item">Contactenos</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">Mi Carrito</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#" >
						<i class="fa fa-cart-plus mr-8"></i> Carrito
						<sup class="text-carrito">(0)</sup>
						<i class="fa fa-angle-down ml-8"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link	" href="<?php echo base_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>/nosotros">Nosotros</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hombre
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mujer
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- carusel del baner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo media(); ?>/images/banner/banner01.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo media(); ?>/images/banner/banner02.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo media(); ?>/images/banner/banner03.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<hr>
	<div class="text-center" style="font-family: 'Oswald';">
		<h1>PRODUCTOS DESTACADOS 2020</h1>
	</div>
	<ul id="autoWidth" class="cs-hidden" style="font-family: 'Oswald';">
		<li class="item-a active">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo media(); ?>/images/productos/ro1ma.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-text">Mascaria</h5>
					<h5 class="card-text">Marca: Gzuck</h5>
					<h5 class="card-text">Modelo: Troop</h5>
					<h5 class="card-text">Precio: S/ 39.00</h5>
					<a href="#" class="btn btn-primary"><i class="fas fa-eye"></i> Ver</a>
				</div>
			</div>
		</li>
		<li class="item-a">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo media(); ?>/images/productos/ro2ma.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</li>
		<li class="item-a">
			<div class="card" style="width: 18rem;">
		<img src="<?php echo media(); ?>/images/productos/ro3ma.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">Card title</h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
		</li>
		<li class="item-a">
			<div class="card" style="width: 18rem;">
		<img src="<?php echo media(); ?>/images/productos/ro4za.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">Card title</h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
		</li>
		<li class="item-a">
			<div class="card" style="width: 18rem;">
		<img src="<?php echo media(); ?>/images/productos/ro5za.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">Card title</h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
		</li>
		<li class="item-a">
			<div class="card" style="width: 18rem;">
		<img src="<?php echo media(); ?>/images/productos/ro6ma.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">Card title</h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
		</li>
	</ul>





	<div class="text-center">
		<section class="container">
			<div class="icon">
				<i class="far fa-credit-card fa-9x"></i>
				<div class="text-center">Diferentes medios de pago</div>
			</div>
			<div class="icon">
				<i class="fas fa-shuttle-van"></i>
				<div class="text-center">Envios gratis desde s/ 199.00 "Lima"</div>
			</div>
			<div class="icon">
				<i class="fas fa-map-marker-alt"></i>
				<div class="text-center">Puntos de venta estrategicos</div>
			</div>
			<div class="linea"></div>
		</section>
	</div>





</body>	
</html>
<!-- script  -->
<!-- jquery 3.3.1  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- ajax 1.14.6 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!-- bootstrap 4.2.1  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- Lightslider -->
<script type="text/javascript" src="<?php echo media(); ?>/js/lightslider.js"></script>
<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/2584a1107b.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo media(); ?>/js/caruselproductos.js"></script>