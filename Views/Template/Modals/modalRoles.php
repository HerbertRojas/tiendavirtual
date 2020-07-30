<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo Rol</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- form start -->
			<form class="form-horizontal">
				<div class="card-body">
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del Rol" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Descripcion</label>
						<textarea class="form-control" id="txtDescripcion" name="txtDescripcion del Rol" rows="2" placeholder="Descripcion" required=""></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Estado</label>
						<select class="form-control">
							<option>Activo</option>
							<option>Inactivo</option>
						</select>
					</div>
				</div><!-- /.card-body -->
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>
</div>