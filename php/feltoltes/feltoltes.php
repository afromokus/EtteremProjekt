<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	require_once("../config/csatlakozas.php");
	
	$sql = "INSERT INTO termekek(nev,leiras,ar,kid) VALUES (?,?,?,?)";
	
	$felkeszules = $csatlakozas -> prepare($sql);
	
	$felkeszules -> bind_param("ssii", $_POST["termekNev"], $_POST["leiras"], $_POST["ar"], $_POST["kategoria"]);
	$felkeszules -> execute();
	$felkeszules -> close();
	$csatlakozas -> close();
	
	}	
?>


<!DOCTYPE html>
	<html lang = "hu">
		<head>
			<script src = "../../JavaScript/jquery-3.3.1.min.js"></script>
			<script src = "../../JavaScript/feltoltes.js"></script>
			<meta charset = "utf8">
			<title>Termékek feltöltése</title>
		</head>
		<body>
			<h2>
				Termék
			</h2>
			<form method = "post" action = "#">
				<input type = "text" name = "termekNev">
				<br>
				<textarea name = "leiras" rows = "6" cols = "50" placeholder = "Termék leírása" maxlength = "255"></textarea>
				<span id = "szovegHossz">255</span>
				<br>
				<input name = "ar" type = "number">
				<br>
				<div id = "kategoriak"></div>
				<button>Mentés</button>				
			<form>
		</body>
	</html>