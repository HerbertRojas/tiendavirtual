<?php 

	class Nosotros extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function nosotros()
		{
			$data['page_id'] = 6;
			$data['page_tag'] = "Productos";
			$data['page_title'] = "Todo sobre Nosotros";
			$data['page_name'] = "nosotros";
			$this->views->getView($this,"nosotros",$data);
		}
		
	}
?>