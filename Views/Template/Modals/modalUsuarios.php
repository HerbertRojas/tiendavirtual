<!-- Modal Usuarios -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleModal">NUEVO USUARIO</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- form start -->
			<form class="form-horizontal" id="formUsuario" name="formUsuario" enctype="multipart/form-data">
				<input type="hidden" name="idUsuario" id="idUsuario">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txtDNI">DNI</label>
								<input type="text" class="form-control" id="txtDNI" name="txtDNI" placeholder="Ingresar DNI">
							</div>
							<div class="form-group">
								<label for="txtNombres">Nombre</label>
								<input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="Ingresar tu Nombres">
							</div>
							<div class="form-group">
								<label for="txtApellidos">Apellido</label>
								<input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="Ingresar tu Apellidos">
							</div>
							<div class="form-group">
								<label for="txtTelefono">Telefono</label>
								<input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingresar tu Telefono">
							</div>
							<div class="form-group">
								<label for="txtEmail">Email</label>
								<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Ingresar Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="listRolid">Tipo Usuario</label>
								<select class="form-control select2 select2-primary" data-dropdown-css-class="select2-primary" style="width: 100%;" id="listRolid" name="listRolid" >
									
								</select>
							</div>
							<div class="form-group">
								<label for="listEstado">Estado</label>
								<select class="form-control" id="listEstado" name="listEstado" >
									<option value="1">Activo</option>
									<option value="2">Inactivo</option>
								</select>
							</div>
							<div class="form-group">
								<label for="txtContraseña">Contraseña</label>
								<input type="password" class="form-control" id="txtContrasena" name="txtContrasena" placeholder="Ingresa una contraseña">
							</div>
							<div class="form-group">
								<label for="productoImagen">Imagen</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="productoImagen">
									<label class="custom-file-label" for="customFile">Insetar Imagen en .jpg</label>
								</div>
							</div>
						</div>
					</div>
					<!-- title-footer -->
					<div class="modal-footer justify-content">
						<button id="btnActionFrom" type="button" class="btn btn-success usuario-guardar" value="nuevo">
							<i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar
						</button>
						<button type="button" class="btn btn-secondary"  data-dismiss="modal" >
							<i class="fa fa-fw fa-lg fa-times-circle"></i> Cerrar
						</button>
						<button type="button" class="btn btn-primary">
							<i class="fab fa-fw fa-lg fa-gg-circle"></i> Limpiar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>