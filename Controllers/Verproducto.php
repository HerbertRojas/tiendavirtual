<?php
	
	class Verproducto extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Verproducto()
		{
			
			$data['page_tag'] = "Verproducto";
			$data['page_neme'] = "verproducto";
			$data['page_title'] = "Verproducto";
			$this->views->getView($this,"verproducto",$data);
		}
	}
 ?>