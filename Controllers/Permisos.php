<?php
	
	class Permisos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Permisos()
		{
			$data['page_id'] = 7;
			$data['page_tag'] = "Permisos";
			$data['page_neme'] = "permisos";
			$data['page_title'] = "Permisos<small> Tienda Virtual</small>";
			$this->views->getView($this,"permisos",$data);
		}
	}
 ?>