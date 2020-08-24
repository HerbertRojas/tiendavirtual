<?php 
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

		public function verificarUsuario($usuario,$contrasena){
			//si existe echo 1 sino echo 0
			//EXTRAER ROLES
			$sql = "SELECT usuario.*,nombrerol
					FROM usuario INNER JOIN rol on usuario.rolid = rol.idrol
					WHERE email = '".$usuario."' and password = '".$contrasena."'";

			$request = $this->select($sql);
			return $request;
		}

		public function obtenerRol($usuario){

		}
	}
?>