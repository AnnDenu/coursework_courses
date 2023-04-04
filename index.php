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
        <title>Образовательная платформа IT-Skill</title>
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
          <a class="nav-link active" aria-current="page" href="#">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">о IT-skills</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Курсы и вебинары
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="courses.php">Курсы</a></li>
            <li><a class="dropdown-item" href="#">Вебинары</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Преподаватели</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
        <button class="btn btn-outline-success me-5" type="submit">Поиск</button>
        <button class="btn btn-outline-primary" type="submit" href = "regist.php">Вход</button>
      </form>
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://idwebhost.com/blog/wp-content/uploads/2021/05/img-1-24.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>У нас лучшие преподаватели</h5>
        <p>Хотите узнать по лучше? Переходите в раздел "Курсы и вебинары"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://idwebhost.com/blog/wp-content/uploads/2021/05/img-1-24.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>У нас ты можешь получить новые навыки и знания</h5>
        <p>Не медли, записывайся на вебинар и получай хорошее настроение вместе с нашими преподавателями</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://idwebhost.com/blog/wp-content/uploads/2021/05/img-1-24.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Метка третьего слайда</h5>
        <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>


<!--Первая карточка курса-->
<div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Java-разработчик</h5>
    <p class="card-text">Срок прохождения данного курса 12 месяцев</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Узнать о курсе</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">JAVA-разработчик</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body small">
  Вы с нуля научитесь программировать на языке Java и создавать веб-приложения на фреймворке Spring. За полгода получите фундаментальные навыки и соберёте портфолио, а мы поможем найти работу.
  <ul>
    <li>Трудоустройство через 6 месяцев</li>
    <p>при прохождении курса</p>
    <li>17 проектов</li>
    <p>в портфолио</p>
    <li>Стажировка в команде</li>
    <p>под руководством тимлида</p>
    <li>Индивидуальная поддержка</li>
    <p>и обратная связь от преподавателя</p>
  </ul>
  <button class="btn btn-primary">Записаться на курс</button>
  </div>
</div>
  </div>
</div>
<!--Вторая карточка курса-->
<div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">JavaScript-фреймворк React.js</h5>
    <p class="card-text">Срок прохождения данного курса 2,5 месяца</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Узнать о курсе</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title" id="offcanvasBottomLabel">JavaScript-фреймворк React.js</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body small">
  Расширьте свои профессиональные знания и навыки разработчика, научившись использовать в работе фреймворк React.js
  Вас ждут 3 месяца теории и практики, которые добавят вам реальных знаний в разработке на JavaScript.
  <ul>
    <li>Длительность</li>
    <p>2,5 месяца</p>
    <li>Онлайн</li>
    <p>в удобное время</p>
    <li>Обучение</li>
    <p>на практике</p>
    <li>Доступ к курсу</li>
    <p>навсегда</p>
  </ul>
  <button class="btn btn-primary">Записаться на курс</button>
  </div>
</div>
  </div>
</div>
<!--Третья карточка курса-->
<div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Веб-вёрстка</h5>
    <p class="card-text">Срок прохождения данного курса 4 месяца</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Узнать о курсе</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">JAVA-разработчик</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body small">
  Верстальщик воплощает в жизнь замысел веб-дизайнера и создаёт рабочие сайты из дизайн-макетов. На курсе вы научитесь верстать одностраничные лендинги, сайты услуг и мероприятий, интернет-магазины. С вёрстки начнётся ваш путь в веб-разработку.
  <ul>
    <li>Длительность</li>
    <p>4 месяца</p>
    <li>4 проекта</li>
    <p>для портфолио</p>
    <li>Практика на вебинарах</li>
    <p>с разработчиками из крупных компаний</p>
    <li>Доступ к курсу</li>
    <p>навсегда</p>
  </ul>
    <button class="btn btn-primary">Записаться на курс</button>
  </div>
</div>
  </div>
</div>
<!--Четвёртая карточка курса-->
<div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Frontend-разработчик PRO</h5>
    <p class="card-text">Срок прохождения данного курса 12 месяцев</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Узнать о курсе</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">JAVA-разработчик</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body small">
    Благодаря frontend-разработчикам мы оставляем лайки и комментарии, добавляем товары в корзину и быстро разбираемся в онлайн-картах.На курсе вы научитесь создавать интерфейсы веб-сервисов с помощью языков программирования и дополнительных технологий. Сможете разрабатывать планировщики задач, мессенджеры, интернет-магазины.
<ul>
    <li>Подходит для новичков</li>
    <p>без опыта в программировании</p>
    <li>6,5 месяцев</li>
    <p>до трудоустройства</p>
    <li>До 10 проектов</li>
    <p>в портфолио</p>
    <li>Практика на вебинарах</li>
    <p>с разработчиками из крупных компаний</p>
  </ul>
  <button class="btn btn-primary">Записаться на курс</button>
  </div>
</div>
  </div>
</div>
<!--Пятая карточка курса-->
<div class="card">
  <div class="card-body"><img src=""  class="card-img-top" alt="...">
    <h5 class="card-title">Веб-разработчик с нуля до PRO</h5>
    <p class="card-text">Срок прохождения данного курса 9,5 месяцев</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Узнать о курсе</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title" id="offcanvasBottomLabel">Веб-разработчик с нуля до PRO</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body small">
  Вы научитесь верстать сайты на HTML и CSS, изучите JavaScript. Сможете разрабатывать на PHP серверную часть сайта – и сделаете первые проекты для портфолио.
  Вас ждут насыщенные курсы, изучение которых можно приравнять к году работы.
  <ul>
    <li>Длительность</li>
    <p>9,5 месяцев</p>
    <li>Онлайн</li>
    <p>в удобное время</p>
    <li>Практические задачи</li>
    <p>для отработки навыков</p>
    <li>Telegram-чат</li>
    <p>с преподавателем и участниками курса</p>
  </ul>
  <button class="btn btn-primary">Записаться на курс</button>
</div>
</div>
  </div>
</div>

<div class = "consult">
  <h1>Начните обучение вместе с нами!</h1>
<p>Если у вас есть вопросы или вы не знаете, что выбрать, оставьте своё имя и номер - мы позвоним, чтобы ответить на все выши вопросы</p>
<div class="row g-10">
  <div class="col-md">
    <div class="form-floating">
      <input type="name" class="form-control" id="floatingInputGrid" placeholder="name" value="">
      <label for="floatingInputGrid">Ваше имя</label>
    </div>
    <div class="form-floating">
      <input type="phone" class="form-control" id="floatingInputGrid" placeholder="number" value="">
      <label for="floatingInputGrid">Ваше телефон</label>
    </div>
    <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Почта</label>
</div>
  </div>
</div>
</div>

    </body>
    </html>