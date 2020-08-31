<!-- Site wrapper -->
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">Inicio</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">Contactos</a>
			</li>
		</ul>
		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Buscar">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="nav-link"> <i id="icon" class="fa fa-bell fa-lg"></i></a>
				</li>
				<li class="dropdown">
					<a class="nav-link" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
						<i class="fa fa-user fa-lg"></i>
						<?php
						if(isset($_SESSION['idusuario'])) {
							echo $_SESSION['email_user'];
						}
						?>
					</a>
					<ul class="dropdown-menu settings-menu dropdown-menu-right">
						<li><a class="dropdown-item" href="<?php echo base_url(); ?>/configuracion"><i class="fa fa-cog fa-lg"></i> Configuracion</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
						<li>
							<a class="dropdown-item" href="#" onclick="cerrarSesion()">
								<i class="fa fa-sign-out-alt fa-lg"></i> Cerrar
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</form>
	</nav><!-- /.navbar -->
	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="#" class="brand-link">
			<img src="<?php echo media(); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">Tienda Virtual - RSNG</span>
		</a>
		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?php echo media(); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">
						<?php 
							if(isset($_SESSION['idusuario'])){ 
								echo $_SESSION['nombres']."<br>";
								echo "<b>".$_SESSION['rol_name']."</b>";
							} 
							// else { 
							// 	echo 'Walter Rojas';
							// } 
						?>
					</a>
				</div>
			</div>
			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Agregue íconos a los enlaces utilizando la clase .nav-icon con font-awesome o cualquier otra biblioteca de fuentes de íconos -->
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>/administrador" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>Administrador</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
							<p>Usuarios<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<!-- <li class="nav-item">
								<a href="<?php //echo base_url(); ?>/crearUsuario" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Crear Usuarios</p>
								</a>
							</li> -->
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>/usuarios" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Usuarios</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>/roles" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Roles</p>
								</a>
							</li>
							<!-- <li class="nav-item">
								<a href="<?php //echo base_url(); ?>/permisos" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Permisos</p>
								</a>
							</li> -->
						</ul>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-user"></i>
							<p>Clientes<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>/clientes" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>clientessss</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-briefcase"></i>
							<p>Productos<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>/productos" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>productosss</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>/pedidos" class="nav-link">
							<i class="nav-icon fas fa-shopping-cart"></i>
							<p>Pedidos</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" onclick="cerrarSesion()">
							<i class="nav-icon fas fa-sign-out-alt"></i>
							<p>Logout</p>
						</a>
					</li>
				</ul>
			</nav><!-- /.sidebar-menu -->
		</div><!-- /.sidebar -->
	</aside>