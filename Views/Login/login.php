<?php 
	echo headerFront($data);
?>
	<br>
	<br>
	<br>
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
									<input type="text" class="form-control" placeholder="Correo Electronico" id="email"	>
								</div>
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="contraseña" id="password">
								</div>
								<div class="input-group mb-3">
									<button type="button" class="btn btn-dark btn-lg btn-block boton-login">INICIAR SESION</button>
								</div>
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
	
<?php echo footerFront($data); ?>