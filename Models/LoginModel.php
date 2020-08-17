<?php 
	session_start();
	class LoginModel extends Mysql
	{	
		/*
			si el encuentra el usuario en Verificar Usuario
			$_SESSION['email_user'] = $user['email_user']
			$_SESSION['user_id'] = $user['id']
			$_SESSION['rol_id'] = $user['rolid']
			$_SESSION['rol_name'] = $user['rol_name']
		*/	
		public function __construct()
		{
			parent::__construct();
		}

		public function verificarUsuar($usuario,$contrasena){

		}
		public function obtenerRol($usuario){
			
		}
	}
?>