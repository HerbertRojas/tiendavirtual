<?php 

	class Administrador extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function administrador()
		{
			$data['page_tag'] = "Administrador - Tienda virtual";
			$data['page_title'] = "Administrador";
			$data['page_name'] = "administrador";
			$this->views->getView($this,"administrador",$data);
		}
		
	}
?>