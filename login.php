<?php
    include "config.php";
/*
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(count($user) == 0){
        echo "Такой пользователь не найден.";
        exit();
    }
    else if(count($user) == 1){
        echo "Логин или праоль введены неверно";
        exit();
    }
    
    setcookie('user', $user['name'], time() + 3600, "/");
    
    $mysql->close();
    header('Location: login.php');
*/
?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <link rel= "stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/login.css">
         <title>Войдите в свой профиль</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link rel="shortcut icon" href="cats.jpg" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
    <div class="container mt-5" >
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1"style ="background-color: Lavender">
<form class="form" method="post" action="" name="signin-form">
   <h1>Войдите в свой профиль</h1>
  <div class="form-outline mb-4">
    <label>Ваше ФИО</label>
    <input class="form-control" type="text" name="login" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-outline mb-4">
    <label>Пароль</label>
    <input class="form-control" type="password" name="password" required />
  </div>
    <div class="mb-3"><button class="btn btn-dark w-100" type="submit" name="auth" value="auth" href="lk.php">Войти</button></div>
    <a href="registration.php">Нет профиля? Зарегистрируйтесь</a>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php 
setcookie('user', $user['name'], time() - 3600, "/");
header('Location: /');
 ?>