<?php
	
	class Usuarios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Usuarios()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Usuarios";
			$data['page_neme'] = "usuarios";
			$data['page_title'] = "Usuarios<small> Tienda Virtual</small>";
			$this->views->getView($this,"usuarios",$data);
		}
	}
 ?>