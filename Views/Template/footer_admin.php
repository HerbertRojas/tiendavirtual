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
<!-- AdminLTE App -->
<script src="<?php echo media(); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo media(); ?>/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo media(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo media(); ?>/dist/js/demo.js"></script>

<!-- <script src="<?php //echo media(); ?>/js/functions_admin.js"></script> -->
<script src="<?php echo media(); ?>/js/functions_roles.js"></script>
<script>
var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
	tableRoles = $('#tableRoles').dataTable( {
		"aProcessing":true,
		"aServerSite":true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
		},
		"ajax":{
			"url":" "+base_url+"/Roles/getRoles",
			"dataSrc":""
		},
		"columns":[
			{"data":"idrol"},
			{"data":"nombrerol"},
			{"data":"descripcion"},
			{"data":"status"}
		],
		"resonsieve":"thue",
		"bDestroy":true,
		"iDisplayLength":10,
		"order":[[0,"desc"]]
	});
});


    $("#tableRoles").DataTable();
</script>
</html> 