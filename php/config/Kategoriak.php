<?php

	require_once("csatlakozas.php");
	
	$sql = "SELECT * FROM kategoriak";
	
	$kategoriakTabla = $csatlakozas -> query($sql);
	
	if(!$kategoriakTabla)
	{
		die("Nem sikerült lekérdezni a kategóriákat");		
	}
	
	$htmlSelection = "<select name = 'kategoria'><option value='0'>Válasszon egy kategóriát</option>";
	
	while($sor = $kategoriakTabla -> fetch_assoc())
	{
		$htmlSelection .= "<option value = '{$sor["id"]}'>{$sor{"kategoria"}}</option>";
	}

	$htmlSelection.="</select>";
	
	echo $htmlSelection;
	
?>