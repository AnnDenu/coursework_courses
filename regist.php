<?php
    include('config.php');
    if (isset($_POST['registration'])) {
        $login = $_POST['login'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $patronymic = $_POST['patronymic'];
        $password = $_POST['password'];
        $bio = $_POST['bio'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE login=:login");
        $query->bindParam("login", $login, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">Этот логин уже зарегистрирован!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(login, last_name, first_name, patronymic, password, bio) VALUES (:login, :last_name, :first_name, :patronymic, :password_hash,:bio)");
            $query->bindParam("login", $login, PDO::PARAM_STR);
            $query->bindParam("last_name", $last_name, PDO::PARAM_STR);
            $query->bindParam("first_name", $first_name, PDO::PARAM_STR);
            $query->bindParam("patronymic", $patronymic, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("bio", $bio, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
               header('login.php');
            } else {
                echo '<p class="error">Неверные данные!</p>';
            }
        }
    }
?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <link rel= "stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link rel="shortcut icon" href="cats.jpg" type="image/jpg">
</head>
<body>
<form method="post" action="" name="signup-form">
<div class="form-element">
<label>Ваш логин</label>
<input type="text" name="login" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Имя</label>
<input type="text" name="last_name" required />
</div>
    <div class="form-element">
        <label>Фамилия</label>
        <input type="text" name="first_name" required />
    </div>
    <div class="form-element">
        <label>Что вас интересует</label>
        <input type="text" name="patronymic" required />
    </div>
<div class="form-element">
<label>Пароль</label>
<input type="password" name="password" required />
</div>
    <div class="form-element">
        <label>Номер телефона</label>
        <input type="text" name="bio" required />
    </div>
<button type="submit" name="register" value="register" href="login.php">Зарегистрироватся</button>
</form>

</body>
</html>