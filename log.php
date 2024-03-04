<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Университет</title>
  </head>
  <body class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header class="header">
      <a href="index.php">
        <h1>ФИД</h1>
      </a>
      <nav>
        <ul class="menu">
          <li><a href="abit.php">Абитуриенту</a></li>
          <li><a href="places.php">Студенту</a></li>
          <li><a href="contacts.php">Контакты</a></li>
          <li><a href="reg.php">ЛК</a></li>
          <li><a href="#">Eng</a></li>
        </ul>
      </nav>
    </header>
    <main class="wrapper">
        <div class="container reg-form">
    <form class="row justify-content-md-center" method="post" action="log.php">
        <h2>Регистрация</h2>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Ваша электронная почта не попадет не в те руки:)</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-warning">Войти</button>
            <a href="aut.html" class="btn-reg">Зарегестрироваться</a>
    </div>
      </form>
    </div>
    </main>
    <footer class="footer">
        <div class="about">
          <span>Об университете</span>
          
          <a class="footer-a" href="#">Абитуриенту</a>
          <a class="footer-a" href="#">Филиалы</a>
          <a class="footer-a" href="#">Кафедры</a>
          <a class="footer-a" href="#">Лицензии и документы</a>
        </div>
        <div class="students">
          <span>Студкентам</span>
  
          <a class="footer-a" href="#">Аспирантура</a>
          <a class="footer-a" href="#">Карьера</a>
          <a class="footer-a" href="#">text</a>
          <a class="footer-a" href="#">text</a>
        </div>
        <div class="contacts">
          <span>Об университете</span>
  
          <a class="footer-a" href="#">+8(953)878-72-03 Приемная комиссия</a>
          <a class="footer-a" href="#">+8(953)878-72-03 Деканат</a>
          <a class="footer-a" href="#">striuk.struknikita2017@yandex.ru</a>
          <a class="footer-a" href="#">Telegram VK</a>
        </div>
      </footer>
  </body>
</html>