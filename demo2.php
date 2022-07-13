<html>
	<head>
		<title>Demo PHP</title>
		<meta charset="utf-8" />
	</head>	
	<body>
	<a href="index1.html">Домашняя страница</a>
		<h1>Hello from PHP</h1>
		<?php
		
			$x = 3;
			$y = 2;
			$z = $x + $y;
			echo "<h2>Результат вычисления $z</h2>";
			
			date_default_timezone_set("Europe/Moscow");
			$now = date("H:i:s");
			echo "<h3>Страница была загружена в $now</h3>";
		
		?>
		
		<form action="doubler.php">
			<input name="num" />
			<button>Удвоить</button>
		</form>
	</body>
</html>