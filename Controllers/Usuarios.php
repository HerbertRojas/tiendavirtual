<?php
	
	class Usuarios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Usuarios()
		{
			$data['page_tag'] = "Usuarios";
			$data['page_neme'] = "usuarios";
			$data['page_title'] = "Usuarios<small> Tienda Virtual</small>";
			$this->views->getView($this,"usuarios",$data);
		}

		public function getUsuario()
		{
			$arrData = $this->model->selectUsuario($_GET['idRol']);
			echo json_encode($arrData);
		}
		
		public function getUsuarios()
		{
			$arrData = $this->model->selectUsuarios();

			for ($i=0; $i < count($arrData); $i++){

				if ($arrData[$i]['status'] == 1) 
				{
					$arrData[$i]['status'] = '<span class="badge bg-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge bg-danger">Inactivo</span>';
				}

				// $arrData[$i]['options'] = '<div class="text-center">
				// <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fas fa-key"></i></button>
				// <button type="button" class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar" onclick="editarRole('.$arrData[$i]['idrol'].')"><i class="fas fa-pencil-alt"></i></button>
				// <button type="button" class="btn btn-danger btn-sm btnDelRol" onclick="eliminarRol('.$arrData[$i]['idrol'].')" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
				// </div>'; 
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
	}
 ?>