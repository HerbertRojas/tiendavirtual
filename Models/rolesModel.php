<?php 

	class RolesModel extends Mysql
	{	
		public function __construct()
		{
			parent::__construct();
		}

		public function selectRole($idRole)
		{
			$sql= "SELECT * FROM rol WHERE idrol = '".$idRole."'";
			$request = $this->select($sql);
			return $request;
		}
		public function selectRoles()
		{
			//EXTRAER ROLES
			$sql = "SELECT * FROM rol WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertarRole($nombrerol,$descripcion,$status)
		{
			$sql = "INSERT INTO rol(nombrerol,descripcion,status) VALUE(?,?,?)";
			$roleValues = [$nombrerol,$descripcion,$status];
			return  $this->insert($sql,$roleValues);
		}

		public function actualizarRole($nombrerol,$descripcion,$status,$idrol)
		{
			$sql = "UPDATE rol SET nombrerol=?,descripcion=?,status=? WHERE idrol=?";

			$roleValues = [$nombrerol,$descripcion,$status,$idrol];
			return  $this->update($sql,$roleValues);
		}

		public function eliminarRole($idrol)
		{
			$sql = "DELETE FROM rol WHERE idrol = ".$idrol."";
			return $this->delete($sql);
		}

	}
?>