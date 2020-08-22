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
								<label for="txtNombre">Nombre</label>
								<input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingresar tu Nombre">
							</div>
							<div class="form-group">
								<label for="txtApellido">Apellido</label>
								<input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingresar tu Apellido">
							</div>
							<div class="form-group">
								<label for="txtTelefono">Telefono</label>
								<input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingresar tu Telefono">
							</div>
							<div class="form-group">
								<label for="txtEmail">Email</label>
								<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Ingresar Email">
							</div>
							<!-- <div class="form-group">
								<label for="txtColor">Color</label>
								<input type="text" class="form-control" id="txtColor" name="txtColor" placeholder="Color del Producto">
							</div> -->
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="listTipoUsuario">Tipo Usuario</label>
								<select class="form-control" id="listTipoUsuario" name="listTipoUsuario" ></select>
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
								<input type="password" class="form-control" id="txtContraseña" name="txtContraseña" placeholder="Ingresa una contraseña">
							</div>
							<!-- <div class="form-group">
								<label for="txtPrecio">Precio</label>
								<input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Precio del Producto">
							</div>
							<div class="form-group">
								<label for="txtStock">Stock</label>
								<input type="text" class="form-control" id="txtStock" name="txtStock" placeholder="Stock del Producto">
							</div> -->
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
						<button id="btnActionFrom" type="button" class="btn btn-success producto-guardar" value="nuevo">
							<i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText"></span> Guardar
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