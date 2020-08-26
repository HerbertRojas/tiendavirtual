<?php
	echo headerFront($data);
?>

<br>
	<br>
	<br>
	<hr>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<!-- AREA INICIO DE SESIÓN CON CORREO ELECTRONICO -->
				<div class="card">
					<img src="<?php echo media(); ?>/images/productos/ro1ma.jpg" class="card-img-top" alt="...">
				</div><!-- /.card -->
			</div><!-- /.col -->
			<div class="col-md-6">
				<!-- AREA INICIO DE SESIÓN CON CORREO ELECTRONICO -->
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="text-white text-center">CREAR UNA CUENTA DE USUARIO</h3>
					</div>
					<div class="card-body">
						<div>
							<form id="formUsuario" name="formUsuario">
								<h2 class="text-center">REGISTRO DE USUARIO</h2>
								<input type="hidden" name="idUsuario" id="idUsuario">
								<div class="form-group">
									<label for="txtDNI"> DNI</label>
									<input type="text" class="form-control form-control-lg" id="txtDNI" name="txtDNI" placeholder="Ingresar DNI">
								</div>
								<div class="form-group">
									<label for="txtNombres"> Nombre</label>
									<input type="text" class="form-control form-control-lg" id="txtNombres" name="txtNombres" placeholder="Ingresar tu Nombres">
								</div>
								<div class="form-group">
									<label for="txtApellidos"> Apellido</label>
									<input type="text" class="form-control form-control-lg" id="txtApellidos" name="txtApellidos" placeholder="Ingresar tu Apellidos">
								</div>
								<div class="form-group">
									<label for="txtTelefono"> Telefono</label>
									<input type="text" class="form-control form-control-lg" id="txtTelefono" name="txtTelefono" placeholder="Ingresar tu Telefono">
								</div>
								<div class="form-group">
									<label for="txtEmail"> Email</label>
									<input type="email" class="form-control form-control-lg" id="txtEmail" name="txtEmail" placeholder="Ingresar Email">
								</div>
								<div class="form-group">
									<label for="txtContrasena"> Contraseña</label>
									<input type="password" class="form-control form-control-lg" id="txtContrasena" name="txtContrasena" placeholder="Ingresa una contraseña">
								</div>
								<div class="form-group">
									<button id="btnActionFrom" type="button" class="btn btn-primary btn-lg btn-block registrar-guardar" value="nuevo">REGÍSTRATE AHORA</button>
								</div>
							</form>
						</div>
					</div><!-- /.card-body -->
				</div><!-- /.card -->
			</div><!-- /.col -->
			<div class="col-md-3">
				<!-- AREA INICIO DE SESIÓN CON CORREO ELECTRONICO -->
				<div class="card">
					<img src="<?php echo media(); ?>/images/productos/ro1ma.jpg" class="card-img-top" alt="...">
				</div><!-- /.card -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div>
	<hr>

<?php echo footerFront($data); ?>