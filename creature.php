<?php 
require_once "connect.php";
$name = $_POST['username'];
$email = $_POST['email'];
$login = $_POST['login'];
$pwd = $_POST['password'];
$hash =  hash('sha256',$pwd);

$result = mysqli_query($con, "INSERT INTO `users` (`ID`, `UserName`, `Email`, `Login`, `PwdHash`) VALUES (NULL, '$name', '$email', '$login', '$hash')");

if ($result = True){
    echo '<meta http-equiv="refresh" content="2; url=login.php">';
    die("Пользователь зарегестрирован. Вы будете перенаправлены на страницу входа");
}
else {
    echo "<h1>Ошибка</h1>";
}
?>