<?php

	class RegistrarModel extends Mysql
	{	
		public function __construct()
		{
			parent::__construct();
		}

		public function insertarRegistro($usuario)
		{
			$sql = "SELECT idrol FROM rol WHERE nombrerol='".$usuario['listRol']."'";
			$rol = $request = $this->select($sql);

			$sql = "INSERT INTO usuario(dni,nombres,apellidos,telefono,email,password,rolid,status) VALUE(?,?,?,?,?,?,?,?)";
			$usuarioValues = [$usuario['txtDNI'], $usuario['txtNombres'],$usuario['txtApellidos'],
							$usuario['txtTelefono'], $usuario['txtEmail'],$usuario['txtContrasena'],
							$rol['idrol'], $usuario['listEstado']];
			return  $this->insert($sql,$usuarioValues);
		}

	}
?>