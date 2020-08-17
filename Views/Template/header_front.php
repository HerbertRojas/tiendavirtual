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
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand" href="#"><img src="<?php echo media(); ?>/images/logo.png" width="100"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Nosotros</a>
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
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Favoritos</button>
			</form>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#" >
						<i class="fa fa-user mr-8"></i> Mi Cuenta<i class="fa fa-angle-down ml-8"></i>
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