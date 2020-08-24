<?php 
	session_start();
	echo headerFront($data);
?>
	<br>
	<br>
	<br>
	
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
		<div class="container">
			<div class="row ">
				<div class="col-lg-4 ">
					<div class="card border-secundary mb-3" style="max-width: 21rem;">
					<div class="card-header"><i class="far fa-credit-card fa-6x"></i></div>
					<div class= "card-body text-secundary">
					<h5 class="card-title">Primary card title</h5>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card border-secundary mb-3" style="max-width: 21rem;">
					<div class="card-header"><i class="fas fa-shuttle-van fa-6x"></i></div>
					<div class= "card-body text-secundary">
					<h5 class="card-title">Primary card title</h5>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card border-secundary mb-3" style="max-width: 21rem;">
					<div class="card-header"><i class="fas fa-map-marker-alt fa-6x"></i></div>
					<div class= "card-body text-secundary">
					<h5 class="card-title">Primary card title</h5>
					</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
<?php echo footerFront($data); ?>