<?php

	$csatlakozas = new mysqli("127.0.0.1", "root", "", "etterem");
	
	if($csatlakozas -> connect_errno)
	{
		die("Sikertelen csatlakozás!");		
	}	
	
	$csatlakozas -> set_charset("utf8");

?>