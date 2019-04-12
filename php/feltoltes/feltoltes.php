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
				<input type = "text" id = "termekNev">
				<br>
				<textarea id = "leiras" rows = "6" cols = "50" placeholder = "Termék leírása" maxlength = "255"></textarea>
				<span id = "szovegHossz">255</span>
				<br>
				<input type = "number">
				<br>
				<div id = "kategoriak"></div>
				<button>Mentés</button>				
			<form>
		</body>
	</html>