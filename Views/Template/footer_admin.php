		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
		</footer>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
		</aside><!-- /.control-sidebar -->
	</div><!-- ./wrapper -->
</body>
<script type="text/javascript">
	const base_url = "<?php echo base_url(); ?>"
</script>
<!-- jQuery -->
<script src="<?php echo media(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo media(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo media(); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="<?php echo media(); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo media(); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo media(); ?>/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo media(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- FUNCIONES DE LA VISTA -->
<?php
	if(isset($data['page_neme'])){
?>
<?php if ($data['page_neme'] == "login") { ?>
<script src="<?php echo media(); ?>/js/functions_login.js"></script>
<?php } ?>
<?php if ($data['page_neme'] == "roles") { ?>
<script src="<?php echo media(); ?>/js/functions_roles.js"></script>
<?php } ?>
<?php if ($data['page_neme'] == "usuarios") { ?>
<script src="<?php echo media(); ?>/js/functions_usuarios.js"></script>
<?php } ?>
<?php if ($data['page_neme'] == "productos") { ?>
<script src="<?php echo media(); ?>/js/functions_productos.js"></script>
<?php } ?>
<?php } ?>
<script src="<?php echo media(); ?>/js/functions_login.js"></script>
</html>