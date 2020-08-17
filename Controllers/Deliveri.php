<?php
	
	class Deliveri extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Deliveri()
		{
			$data['page_id'] = 5;
			$data['page_tag'] = "Deliveri";
			$data['page_neme'] = "deliveri";
			$data['page_title'] = "Deliveri<small> Tienda Virtual</small>";
			$this->views->getView($this,"deliveri",$data);
		}
	}
 ?>