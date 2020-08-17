<!-- Modal Productos -->
<div class="modal fade" id="modalFormProducto" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo Producto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- form start -->
			<form class="form-horizontal" id="formProducto" name="formProducto" enctype="multipart/form-data">
				<input type="hidden" name="idProducto" id="idProducto">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="txtCodigo">Codigo</label>
								<input type="text" class="form-control" id="txtCodigo" name="txtCodigo" placeholder="Ingresar codigo del Producto">
							</div>
							<div class="form-group">
								<label class="txtCategoria">Categoria</label>
								<input type="text" class="form-control" id="txtCategoria" name="txtCategoria" placeholder="Categoria del Producto">
							</div>
							<div class="form-group">
								<label class="txtArticulo">Articulo</label>
								<input type="text" class="form-control" id="txtArticulo" name="txtArticulo" placeholder="Articulo del Producto">
							</div>
							<div class="form-group">
								<label class="txtMarca">Marca</label>
								<input type="text" class="form-control" id="txtMarca" name="txtMarca" placeholder="Marca del Producto">
							</div>
							<div class="form-group">
								<label class="txtModelo">Modelo</label>
								<input type="text" class="form-control" id="txtModelo" name="txtModelo" placeholder="Modelo del Producto">
							</div>
							<div class="form-group">
								<label class="txtStock">Stock</label>
								<input type="text" class="form-control" id="txtStock" name="txtStock" placeholder="Stock del Producto">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="txtColor">Color</label>
								<input type="text" class="form-control" id="txtColor" name="txtColor" placeholder="Color del Producto">
							</div>
							<div class="form-group">
								<label class="txtTalla">Talla</label>
								<input type="text" class="form-control" id="txtTalla" name="txtTalla" placeholder="Talla del Producto">
							</div>
							<div class="form-group">
								<label class="txtGenero">Genero</label>
								<select class="form-control" id="listGenero" name="listGenero" >
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
									<option value="Otros">Otros</option>
								</select>
							</div>
							<div class="form-group">
								<label class="txtBotapie">Botapie</label>
								<input type="text" class="form-control" id="txtBotapie" name="txtBotapie" placeholder="Botapie del Producto">
							</div>
							<div class="form-group">
								<label class="txtPrecio">Precio</label>
								<input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Precio del Producto">
							</div>
						</div>
						
						<div class="form-group col-md-12">
							<label for="txtImagen">Imagen</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="productoImagen">
								<label class="custom-file-label" for="customFile">Imagen</label>
							</div>
						</div>
					</div>
					<div class="title-footer">
						<button type="button" class="btn btn-success producto-guardar" value="nuevo">
							<i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-secondary"  data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i> Cerrar</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary"><i class="fab fa-fw fa-lg fa-gg-circle"></i> Limpiar</button>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>