<!-- Modal Roles -->
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
			<form class="form-horizontal" id="formRol" name="formRol">
				<input type="hidden" name="idRol" id="idRol">
				<div class="card-body">
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del Rol" >
					</div>
					<div class="form-group">
						<label class="control-label">Descripcion</label>
						<textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripcion del rol" ></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Estado</label>
						<select class="form-control" id="listStatus" name="listStatus" >
							<option value="1">Activo</option>
							<option value="2">Inactivo</option>
						</select>
					</div>
					<div class="title-footer">
						<button class="btn btn-success rol-guardar" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-secondary"  data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
					</div>
				</div><!-- /.card-body -->
			</form>
			
		</div>
	</div>
</div>