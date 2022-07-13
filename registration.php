<?php 
require_once "connect.php";
$tablename = mysqli_query($con, "SELECT * FROM `users`");
$tablename = mysqli_fetch_all($tablename);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
			input, button {
			margin: 6px;
			}
			
			button {
				width:150px;
			}
		</style>
    <title>Регистрация</title>
</head>
<body>
<a href = "index1.html">Домашняя страница</a>
    <h1>Регистрация нового пользователя</h1>
    <form action="creature.php" method="post">
    Ваше имя: <br />
    <input type="text" name="username"/> <br />
    Ваш Email: <br />
    <input type="text" name="email"/> <br />
    Ваш логин: <br />
    <input type="text" name="login"/> <br />
    Ваш пароль: <br />
    <input type="password" name="password"/><br />
    <input type="submit" value="Зарегестрироваться!"><br />
    Author: Алексей Крючков Cyb3
</form> 
</body>
</html>