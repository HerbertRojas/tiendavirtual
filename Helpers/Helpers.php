<?php

	//RECORTAR LA URL DEL PROYECTO
	function base_url()
	{
		return BASE_URL;
	}
	//RECORTAR LA URL DE ASSETS
	function media()
	{
		return BASE_URL."/Assets";
	}
	function headerAdmin($data="")
	{
		$view_header = "Views/Template/header_admin.php";
		require_once ($view_header);
	}
	function footerAdmin($data="")
	{
		$view_footer = "Views/Template/footer_admin.php";
		require_once ($view_footer);
	}
	function headerFront($data="")
	{
		$view_headerFront = "Views/Template/header_front.php";
		require_once ($view_headerFront);
	}
	function footerFront($data="")
	{
		$view_footerFront = "Views/Template/footer_front.php";
		require_once ($view_footerFront);
	}
	//MUESTRA INFORMACION FORMATEADA
	function dep($data)
	{
		$format = print_r('<pre>');
		$format .= print_r($data);
		$format .= print_r('</pre>');
		return $format;
	}
	function getModal(string $nameModal, $data)
	{
		$view_modal = "Views/Template/Modals/{$nameModal}.php";
		require_once $view_modal;
	}
	//ELIMINAR EXCESO DE ESPACIOS ENTRE PALABRAS
	function strClean($strCadena){
		$string = preg_replace(['/\s+/','/^\s|\s$/'], ['',''], $strCadena);
		$string = trim($string);//ELIMINA ESPACIOS EN BLANCO AL INICIO Y AL FINAL
		$string = stripcslashes($string);//ELIMINA LAS \ INVERTIDAS
		$string = str_ireplace("<script>", "", $string);
		$string = str_ireplace("</script>", "", $string);
		$string = str_ireplace("<script src>", "", $string);
		$string = str_ireplace("<script type=>", "", $string);
		$string = str_ireplace("SELECT * FROM", "", $string);
		$string = str_ireplace("DELETE FROM", "", $string);
		$string = str_ireplace("INSERT INTO", "", $string);
		$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
		$string = str_ireplace("DROP TABLE", "", $string);
		$string = str_ireplace("OR '1'='1", "", $string);
		$string = str_ireplace('OR "1"="1"', "", $string);
		$string = str_ireplace('OR ´1´=´1´', "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("LIKE '", "", $string);
		$string = str_ireplace('LIKE "', "", $string);
		$string = str_ireplace("LIKE ´", "", $string);
		$string = str_ireplace("OR 'a'='a", "", $string);
		$string = str_ireplace('OR "a"="a"', "", $string);
		$string = str_ireplace("OR ´a´=´a", "", $string);
		$string = str_ireplace("OR ´a´=´a", "", $string);
		$string = str_ireplace("--", "", $string);
		$string = str_ireplace("^", "", $string);
		$string = str_ireplace("[", "", $string);
		$string = str_ireplace("]", "", $string);
		$string = str_ireplace("==", "", $string);
		return $string;
	}
	//GENERA UNA CONTRASEÑA DE 10 CARACTES
	function passGenerator($length = 10)
	{
		$pass = "";
		$longitudPass=$length;
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$longitudCadena=strlen($cadena);

		for ($i=1; $i<=$longitudPass; $i++)
		{ 
			$pos = rand(0,$longitudCadena-1);
			$pass .= substr($cadena,$pos,1);
		}
		return $pass;
	}
	//GENERA UN TOKEN
	function token()
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
		return $token;
	}
	//FORMATO PARA VALORES MONETARIOS
	function formatMoney($cantidad){
		$cantidad = number_format($cantidad,2,SPD,SPM);
		return $cantidad;
	}
	
?>	