<?php
	
	class Clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Clientes()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Clientes";
			$data['page_neme'] = "clientes";
			$data['page_title'] = "Clientes<small> Tienda Virtual</small>";
			$this->views->getView($this,"clientes",$data);
		}
	}
 ?>