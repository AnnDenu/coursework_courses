<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <link rel= "stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Каталог курсов</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="cats.jpg" type="img/jpg">
        <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    
    </head>
    <body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <img src="img/logo.png" type="img/png" style = "width:5%;"></img>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">о IT-skills</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Курсы и вебинары
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Курсы</a></li>
            <li><a class="dropdown-item" href="#">Вебинары</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Преподаватели</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
        <button class="btn btn-outline-success me-5" type="submit">Поиск</button>
        <button class="btn btn-outline-primary" type="submit" href = "#lk.php">Войти</button>
      </form>
    </div>
  </div>
</nav>

<div class = "title">

<h1>Программирование</h1>
<?php
/*Соединяемся с БД и делаем выборку из таблицы
mysql_connect("10.100.3.80", "20269","xiiiiq");
mysql_select_db("20269_courses");
$sql = "SELECT * FROM courses";
$result_select = mysql_query($sql);

/*Выпадающий список

echo "<select name = 'Программирование'>";
while ($object = mysql_fetch_object ($result_select)){
echo "<option value = '$object->name'>
$object->number_of_seats</option>";
}

echo "</select>";*/
?>
</div>
<div class = "row">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">WEB-дизайн</h5>
    <p class="card-text">Вы научитесь конструировать модели, работать с графикой и делать индивидуальные дизайны сайтов.</p>
    <a href="#" class="btn btn-primary">Перейти</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Java-разработчик</h5>
    <p class="card-text">Вы научитесь конструировать модели, работать с графикой и делать индивидуальные дизайны сайтов.</p>
    <a href="#" class="btn btn-primary">Перейти</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frontend-разработчик</h5>
    <p class="card-text">Вы научитесь конструировать модели, работать с графикой и делать индивидуальные дизайны сайтов.</p>
    <a href="#" class="btn btn-primary">Перейти</a>
  </div>
</div>
</div>
</body>
</html>