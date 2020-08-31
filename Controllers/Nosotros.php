<?php 

	class Nosotros extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function nosotros()
		{
			$data['page_tag'] = "nosotros";
			$data['page_title'] = "Pagina Principal";
			$data['page_name'] = "nosotros";
			$this->views->getView($this,"nosotros",$data);
		}
		
	}
?>