<?php 
	spl_autoload_register(function($class){
		//echo LIBS.'core/'.$class.".php";
		if (file_exists("Libraries/".'Core/'.$class.".php")) {
			require_once("Libraries/".'Core/'.$class.".php");
		}
	});
?>