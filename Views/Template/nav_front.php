	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand" href="home"><img src="<?php echo media(); ?>/images/logo.png" width="100"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nosotros">Nosotros</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Hombre
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Zapatillas</a>
						<a class="dropdown-item" href="#">Camisa</a>
						<a class="dropdown-item" href="#">Jogger</a>
						<a class="dropdown-item" href="#">Casacas</a>
						<a class="dropdown-item" href="#">Chompas</a>
						<a class="dropdown-item" href="#">polos</a>
						<a class="dropdown-item" href="#">Poleras</a>
						<a class="dropdown-item" href="#">Bividis</a>
						<a class="dropdown-item" href="#">Shorts</a>
						<a class="dropdown-item" href="#">Pantalones</a>
						<a class="dropdown-item" href="#">Billeteras</a>
						<a class="dropdown-item" href="#">Correas</a>
						<a class="dropdown-item" href="#">Canguros</a>
						<a class="dropdown-item" href="#">Gorros y Chullos</a>
						<a class="dropdown-item" href="#">Relojes y Lentes</a>
						<a class="dropdown-item" href="#">Lanyards</a>
						<a class="dropdown-item" href="#">Mascarillas</a>
						<a class="dropdown-item" href="#">Mochilas y Morrales</a>
						<a class="dropdown-item" href="#">Ropa Interior</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Mujer
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Zapatillas</a>
						<a class="dropdown-item" href="#">Blusas</a>
						<a class="dropdown-item" href="#">Jogger</a>
						<a class="dropdown-item" href="#">Casacas</a>
						<a class="dropdown-item" href="#">Chompas</a>
						<a class="dropdown-item" href="#">polos</a>
						<a class="dropdown-item" href="#">Poleras</a>
						<a class="dropdown-item" href="#">Bividis</a>
						<a class="dropdown-item" href="#">Shorts</a>
						<a class="dropdown-item" href="#">Pantalones</a>
						<a class="dropdown-item" href="#">Relojes y Lentes</a>
						<a class="dropdown-item" href="#">Mascarillas</a>
						<a class="dropdown-item" href="#">Mochilas y Morrales</a>
						<a class="dropdown-item" href="#">Ropa Interior</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Niños
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Zapatillas</a>
						<a class="dropdown-item" href="#">Camisas</a>
						<a class="dropdown-item" href="#">Jogger</a>
						<a class="dropdown-item" href="#">Casacas</a>
						<a class="dropdown-item" href="#">Chompas</a>
						<a class="dropdown-item" href="#">polos</a>
						<a class="dropdown-item" href="#">Poleras</a>
						<a class="dropdown-item" href="#">Bividis</a>
						<a class="dropdown-item" href="#">Shorts</a>
						<a class="dropdown-item" href="#">Pantalones</a>
						<a class="dropdown-item" href="#">Ropa Interior</a>
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
						<i class="fa fa-user mr-8"></i> 
						<?php 
							if(isset($_SESSION['idusuario']))
							{
								echo $_SESSION['email_user'];
							}
							else{
								echo "Mi Cuenta";	
							}
						?> 
					</a>
					<div class="dropdown-menu">
					<?php
						if(!isset($_SESSION['idusuario']))
						{
					?>
						<a href="login" class="dropdown-item">Login</a>
						<a href="registrar" class="dropdown-item">Crear Cuenta</a>
						<a href="#" class="dropdown-item">¿Olvidaste tu CLave?</a>
						<a href="#" class="dropdown-item">Contactenos</a>
					<?php } else { ?>
						<a href="#" class="dropdown-item" onclick="cerrarSesion()">Cerrar Sesi&oacute;n</a>
					<?php
						}
					?>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">Mi Carrito</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#" >
						<i class="fa fa-cart-plus mr-8"></i> Carrito
					</a>
				</li>
			</ul>
		</div>
	</nav>