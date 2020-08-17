<?php
	
	class Productos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Productos()
		{
			$data['page_id'] = 8;
			$data['page_tag'] = "Productos";
			$data['page_neme'] = "productos";
			$data['page_title'] = "Productos<small> Tienda Virtual</small>";
			$this->views->getView($this,"productos",$data);
		}

		public function getProductos()
		{
			$arrData = $this->model->selectProductos();

			for($i=0;$i <count($arrData);$i++)
			{
				if($arrData[$i]['imagen'] == null || $arrData[$i]['imagen'] == ''){
					$arrData[$i]['imagen'] = '';
				}
				else {
					$arrData[$i]['imagen'] = "<img src='".media()."/images/".$arrData[$i]['imagen']."' height='32'>";
				}
			}
			// for ($i=0; $i < count($arrData); $i++){

			// 	if ($arrData[$i]['status'] == 1) 
			// 	{
			// 		$arrData[$i]['status'] = '<span class="badge bg-success">Activo</span>';
			// 	}else{
			// 		$arrData[$i]['status'] = '<span class="badge bg-danger">Inactivo</span>';
			// 	}

			// 	$arrData[$i]['options'] = '<div class="text-center">
			// 	<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fas fa-key"></i></button>
			// 	<button type="button" class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar" onclick="editarRole('.$arrData[$i]['idrol'].')"><i class="fas fa-pencil-alt"></i></button>
			// 	<button type="button" class="btn btn-danger btn-sm btnDelRol" onclick="eliminarRol('.$arrData[$i]['idrol'].')" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
			// 	</div>'; 
			// }
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function insertarProducto()
		{
			$idproducto = $this->model->insertarProducto($_POST);

			//$imagen = $_POST['imagenProducto'];

			if (($_FILES["imagenProducto"]["type"] == "image/pjpeg")
			    || ($_FILES["imagenProducto"]["type"] == "image/jpeg")
			    || ($_FILES["imagenProducto"]["type"] == "image/png")
			    || ($_FILES["imagenProducto"]["type"] == "image/gif")
				|| ($_FILES["imagenProducto"]["type"] == "image/jpg")) {


				$imagen_ext = (explode(".", strtolower($_FILES['imagenProducto']['name'])))[1];

				$_FILES['imagenProducto']['name'] = 'Assets/images/productos/'.$idproducto.".".$imagen_ext;

				$imagenProducto = 'productos/'.$idproducto.".".$imagen_ext;

				$mover = 0;
				if (move_uploaded_file(
						$_FILES["imagenProducto"]["tmp_name"], 
						$_FILES['imagenProducto']['name'])
					) {
			      $mover = 1;
			    } 

			    if($mover==1) {
			    	$request = $this->model->actualizarImagenProducto($imagenProducto,$idproducto);
			    }
			    else {
			    	$request = 0;
			    }
				echo $request;
			} else {
				echo  0;
			}
		}

		public function actualizarImagenProducto($imagen,$idproducto)
		{
			
			
		}
	}
 ?>