<?php

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
			$data['page_tag'] = "Roles Usuario";
			$data['page_neme'] = "roles";
			$data['page_title'] = " Roles Usuario<small> Tienda Virtual</small>";
			$this->views->getView($this,"roles",$data);
		}

		public function getRole()
		{
			$arrData = $this->model->selectRole($_GET['idRol']);
			echo json_encode($arrData);
		}
		
		public function getRoles()
		{
			$arrData = $this->model->selectRoles();

			for ($i=0; $i < count($arrData); $i++){

				if ($arrData[$i]['status'] == 1) 
				{
					$arrData[$i]['status'] = '<span class="badge bg-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge bg-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button type="button" class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar" onclick="editarRole('.$arrData[$i]['idrol'].')"><i class="fas fa-pencil-alt"></i></button>
				<button type="button" class="btn btn-danger btn-sm btnDelRol" onclick="eliminarRol('.$arrData[$i]['idrol'].')" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
				</div>'; 
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getSelectRoles()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectRoles();
			if (count($arrData) > 0) {
				for ($i=0; $i < count($arrData); $i++) { 
					$htmlOptions.= '<option value="'.$arrData[$i]['idrol'].'">'.$arrData[$i]['nombrerol'].'</option>';
				}
			}
			echo $htmlOptions;
			//die();
		}

		public function insertarRol() 
		{
			$strNombre = $_POST['strNombre'];
			$strDescripcion = $_POST['strDescripcion'];
			$listStatus = $_POST['listStatus'];

			$request = $this->model->insertarRole($strNombre,$strDescripcion,$listStatus);

			echo $request;
		}
		public function actualizarRol()
		{
			$strNombre = $_POST['strNombre'];
			$strDescripcion = $_POST['strDescripcion'];
			$listStatus = $_POST['listStatus'];
			$idRol = $_POST['idRol'];

			$request = $this->model->actualizarRole($strNombre,$strDescripcion,$listStatus,$idRol);

			echo $request;
		}

		public function eliminarRol()
		{
			$request = $this->model->eliminarRole($_POST['idRol']);
			echo $request;
		}

	}
?>