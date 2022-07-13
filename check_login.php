<?php
	session_start();

?>
<html>
	<head>
		<title>Проверка логина и пароля</title>
		<meta charset="utf-8" />
		<!--<style>
			input {
				width: 150px;
				margin: 6px;
			}
		</style>-->
	</head>
	<body>
		<a href="index1.html">Домашняя страница</a>
		<?php
			$user = $_REQUEST["userName"];
			$pwd = $_REQUEST["pwd"];
			$hash = hash('sha256',$pwd);
			
			//Ниже допущены нарушения правил безопасности
			//1. Слабый пароль
			//2. Нарушения принципа наименьших привилегий
			//3. Секрет в коде
			//1-3 устранено путем делегирования ответственности администратору сервера (в переменные окружения)
			//4. Уязвимость для SQL Injection - устранено. Раньше могло сломать: user1' OR (1=1) --
			
			//$sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
			//echo $sql;

			$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=?";
			$db_server = getenv("cyb3_db_server");
			$db_user = getenv("cyb3_db_user");
			$db_pwd = trim(getenv("cyb3_db_pwd"));
			//echo "$db_server $db_user $db_pwd <br />";
			$conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");
			echo("Go");
			//$result = mysqli_query($conn, $sql);
			//echo $result;
			//var_dump(mysqli_num_rows($result));


			//Код, избавляющий за счет применения параметрических запросов от опасности SQL Injection
			$stat = mysqli_prepare($conn, $sql);
			mysqli_stmt_bind_param($stat, "ss", $user, $hash);
			mysqli_stmt_execute($stat);
			$result = mysqli_stmt_get_result($stat);


			$num_rows = mysqli_num_rows($result);
			mysqli_close($conn);


			if ($num_rows >= 1) {
				echo "<h1>Привет, $user</h1>";
				$_SESSION["user"] = $user;
			}
			else {
				echo "<h1>Неверный логин или пароль</h1>";
			}
		?>	
	
	
	
	</body>

</html>