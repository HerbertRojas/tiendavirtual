<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rojas - Sport</title>
	<!-- link  -->
	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- google fonst -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body style="font-family: 'Oswald';">
	<div class="container">
		<nav class="navbar navbar-expand bg-light">
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>">
							<img src="<?php echo media(); ?>/images/logo.png" width="100">
						</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">999-385-710 <i id="icon" class="fab fa-whatsapp mr-8"></i></a>
					</li>
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
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>nosotros">Nosotros</a>
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
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
					<button class="btn btn-outline-success my-2 mr-sm-2" type="submit">Buscar</button>
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Favoritos</button>
				</form>
			</div>
		</nav>
		<hr>
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
<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/2584a1107b.js" crossorigin="anonymous"></script>