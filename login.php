<html>
	<head>
		<title>Логин и пароль</title>
		<meta charset="utf-8" />
		<style>
			input {
				width: 150px;
				margin: 6px;
			}
		</style>
	</head>
	<body>
	<a href="index1.html">Домашняя страница</a>
	<h1 id="hdr1">Введите логин и пароль</h1>
	
	<form action="check_login.php" method="POST">
		<input type="text" name="userName" /> <br />
		<input type="password" name="pwd" /> <br />
		<input type="submit" value="Войти" />
	</form>
	</body>

</html>