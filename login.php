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
		<?php require_once "menu.php" ?>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<!-- AREA INICIO DE SESIÓN CON CORREO ELECTRONICO -->
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="text-white text-center">INICIO DE SESIÓN CON CORREO ELECTRONICO</h3>
					</div>
					<div class="card-body">
						<div>
							<form>
								<h2 class="text-center">INICIO DE SESIÓN</h2>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Correo Electronico">
								</div>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Correo Electronico">
								</div>
								<div class="input-group mb-3">
									<button type="button" class="btn btn-dark btn-lg btn-block">INICIAR SESION</button>
								</div>
							</form>
							<form>
								<h1 class="text-center">¿PRIMERA VEZ AQUÍ?</h1>
								<div class="input-group mb-3">
									<button type="button" class="btn btn-primary btn-lg btn-block">REGÍSTRATE AHORA</button>
								</div>
							</form>
						</div>
					</div><!-- /.card-body -->
				</div><!-- /.card -->
			</div><!-- /.col (LEFT) -->
			<hr>
			<div class="col-md-6">
				<!-- AREA CHART -->
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="text-white text-center">INGRESA CON FACEBOOK</h3>
					</div>
					<div class="card-body">
						<div class="chart">
							<form>
								<div class="input-group mb-3">
									<button type="button" class="btn_face btn btn-primary btn-lg btn-block">
										<i class="fab fa-facebook logo_f"></i>
										<span class="col-der">INGRESA CON FACEBOOK</span>
									</button>
								</div>
							</form>
								<canvas id="areaChart" style="min-height: 250px; height: 275px; max-height: 300px; max-width: 100%; display: block; width: 394px;" width="492" height="312" class="chartjs-render-monitor"></canvas>
						</div>
					</div><!-- /.card-body -->
				</div><!-- /.card -->
			</div><!-- /.col (RIGHT) -->
		</div><!-- /.row -->
	</div>
	<hr>
	<form>
		<input class="form-control mr-sm-2" type="search" placeholder="Buscar...">
	</form>
</body>
<!-- script  -->
<!-- jquery 3.3.1  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- ajax 1.14.6 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!-- bootstrap 4.2.1  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/2584a1107b.js" crossorigin="anonymous"></script>
</html>