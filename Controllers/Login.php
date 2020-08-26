<?php
	session_start();
	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Login";
			$data['page_title'] = "RojasSport - Login";
			$data['page_neme'] = "login";
			$this->views->getView($this,"login",$data);
		}

		public function verificarUsuario()
		{
			$usuario = $_POST['email_user'];
			$contrasena = $_POST['contrasena'];

			$request = $this->model->verificarUsuario($usuario,$contrasena);
			if(is_array($request))
			{
				$_SESSION['email_user'] =$request['email'];
				$_SESSION['idusuario'] = $request['idusuario'];
				$_SESSION['rol_id'] = $request['rolid'];
				$_SESSION['nombres'] = $request['nombres'];
				$_SESSION['rol_name'] = $request['nombrerol'];

				if($request['nombrerol'] == 'Cliente') {
					echo 2;
				} else {
					echo 1;
				}
			}
			else {
				echo 0;
			}
		}

		public function cerrarSesion()
		{
			unset($_SESSION['idusuario']);
			session_destroy();
			echo 1;	
		}
	}
?>