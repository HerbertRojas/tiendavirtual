<?php 
	session_start();
	class Registrar extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function registrar()
		{
			$data['page_tag'] = "Registrar";
			$data['page_title'] = "RojasSport - Registrar";
			$data['page_neme'] = "registrar";
			$this->views->getView($this,"registrar",$data);
		}

		public function insertarRegistro() 
		{
			$idregistro = $this->model->insertarRegistro($_POST);
			echo $idregistro;
		}
	}
?>