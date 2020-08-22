<?php 

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
			$data['page_name'] = "Login";
			$this->views->getView($this,"login",$data);
		}

		// public function iniciarSesion()
		// {
		// 	$usuario = $_POST['email_user'];
		// 	$contrasena = $_POST['password'];

		// 	$request = $this->model->verificarUsuario($usuario,$contrasena);
		// 	$rol = $this->model->obtenerRol($usuario);
		// 	if($request == 1)
		// 	{
		// 		if($rol == 'Cliente')
		// 		{
		// 			echo ="1";
		// 		} else {
		// 			echo "2";
					/*
					succes:function(respuesta) {
						if(respuesta ==  1){
							window.location='home'
						} else {
							window.location='administrador'
						}
					}
					*/
			// 	}
			// }
			// else {
			// 	echo 0;
			// }
		//}
		
	}
?>