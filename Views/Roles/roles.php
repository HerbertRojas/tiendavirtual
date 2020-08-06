<?php 
	echo headerAdmin($data);
	echo getModal('modalRoles',$data);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="fas fa-user-tag"></i><?php echo $data['page_title'] ?></h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title"><?php echo $data['page_title'] ?>
								<button type="button" class="btn btn-success" onclick="openModal();">
									<i class="fas fa-plus-circle"></i> Nuevo
								</button>
							</h2>
						</div><!-- /.card-header -->
						<div class="card-body">
							<table id="tableRoles" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Estado</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Estado</th>
										<th>Accion</th>
									</tr>
								</tfoot>
							</table>
						</div><!-- /.card-body -->
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div>
			<div class="card-footer">
				Footer
			</div><!-- /.card-footer-->
		</div><!-- /.card -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php echo footerAdmin($data); ?>