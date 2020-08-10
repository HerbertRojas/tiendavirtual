<?php echo headerAdmin($data); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo $data['page_title'] ?></h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>5</h3>
							<p>Usuarios</p>
						</div>
						<div class="icon">
							<i class="fas fa-users"></i>
						</div>
						<a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>25</h3>
							<p>Clientes</p>
						</div>
						<div class="icon">
							<i class="fas fa-user"></i>
						</div>
						<a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>10</h3>
							<p>Productos</p>
						</div>
						<div class="icon">
							<i class="fas fa-briefcase"></i>
						</div>
						<a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>500</h3>
							<p>Productos</p>
						</div>
						<div class="icon">
							<i class="fas fa-shopping-cart"></i>
						</div>
						<a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				Start creating your amazing application!
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				Footer
			</div><!-- /.card-footer-->
		</div><!-- /.card -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php echo footerAdmin($data); ?>