<?php

	class UsuariosModel extends Mysql
	{	
		public function __construct()
		{
			parent::__construct();
		}

		public function selectUsuario($idUsuario)
		{
			$sql= "SELECT * FROM usuario WHERE idusuario = '".$idUsuario."'";
			$request = $this->select($sql);
			return $request;
		}

		public function selectUsuarios()
		{
			//EXTRAER USUARIOS
			$sql = "SELECT usuario.*,nombrerol	
					FROM usuario INNER JOIN rol on usuario.rolid = rol.idrol 
					WHERE usuario.status <> 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertarUsuario($usuario)
		{
			$sql = "SELECT idrol FROM rol WHERE nombrerol='".$usuario['listRol']."'";
			$rol = $request = $this->select($sql);

			$sql = "INSERT INTO usuario(dni,nombres,apellidos,telefono,email,password,rolid,status) VALUE(?,?,?,?,?,?,?,?)";
			$usuarioValues = [$usuario['txtDNI'], $usuario['txtNombres'],$usuario['txtApellidos'],
							$usuario['txtTelefono'], $usuario['txtEmail'],$usuario['txtContrasena'],
							$rol['idrol'], $usuario['listEstado']];
			return  $this->insert($sql,$usuarioValues);
		}

		public function actualizarUsuario($dni,$nombres,$apellidos,$telefono,$email,$password,$rolid,$status,$idusuario)
		{
			$sql = "UPDATE usuario SET dni=?,nombres=?,apellidos=?,telefono=?,email=?,password=?,rolid=?,status=? WHERE idusuario=?";

			$usuarioValues = [$dni,$nombres,$apellidos,$telefono,$email,$password,$rolid,$status,$idusuario];
			return  $this->update($sql,$usuarioValues);
		}

			



		// public function actualizarUsuario($dni,$nombres,$apellidos,$telefono,$email,$password,$rolid,$status,$idusuario)
		// {
		// 	$sql = "UPDATE usuario SET dni=?,nombres=?,apellidos=?,telefono=?,email=?,password=?,rolid=?,status=? WHERE idusuario=?";

		// 	$usuarioValues = [$dni,$nombres,$apellidos,$telefono,$email,$password,$rolid,$status,$idusuario];
		// 	return  $this->update($sql,$usuarioValues);
		// }

		// public function eliminarRole($idrol)
		// {
		// 	$sql = "DELETE FROM rol WHERE idrol = ".$idrol."";
		// 	return $this->delete($sql);
		// }

	}
?>