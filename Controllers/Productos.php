<?php
	
	class Productos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Productos()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Productos";
			$data['page_neme'] = "productos";
			$data['page_title'] = "Productos<small> Tienda Virtual</small>";
			$this->views->getView($this,"productos",$data);
		}
	}
 ?>