<?php
 include('config.php');
 /*
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
$bio = filter_var(trim($_POST['bio']), FILTER_SANITIZE_STRING);
$patronymic = filter_var(trim($_POST['patronymic']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Недопустимая длина логина";
	exit();
}
else if(mb_strlen($name) < 5){
	echo "Недопустимая длина имени.";
	exit();
} // Проверяем длину имени 

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}*/

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Вход/Регистрация</title>
</head>
<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
				<form action="check.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success">Зарегистрироваться</button><br>
				</form> 
			</div>
		</div>
	</div>
	
</body>
</html>