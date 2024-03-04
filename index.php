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
      <section class="block-1 wrapper bg">
        <div class="text">
          <h2 class="title">Открыт прием на 2023/2024 учебный год</h2>
          <div>
            <p>*бакалавриат, специалитет и магистратура</p>
            <p>*Очная, очно-заочная и заочная форма обучения</p>
          </div>
          <a href="#">Подробнее</a>
        </div>
        <form class="form1">
          <h3>Заявка на обучение</h3>
          <input type="text" placeholder="Имя" />
          <input type="text" placeholder="Email" />
          <button>Подать заявку</button>
        </form>
      </section>
      <section class="block-2 wrapper">
        <div class="upper">
          <h3>Обьявления</h3>
          <a>Все обьявления</a>
        </div>
        <div class="cards">
          <div class="card">
            <img class="img" src="img/photo2.PNG" alt="Image" />
            <p>*Очная, очно-заочная и заочная форма обучения</p>
            <hr />
            <span>21.21.21</span>
          </div>
          <div class="card">
            <img class="img" src="img/photo1.PNG" alt="Image" />
            <p>*Очная, очно-заочная и заочная форма обучения</p>
            <hr />
            <span>21.21.21</span>
          </div>
          <div class="card">
            <img class="img" src="img/photo3.PNG" alt="Image" />
            <p>*Очная, очно-заочная и заочная форма обучения</p>
            <hr />
            <span>21.21.21</span>
          </div>
        </div>
      </section>
      <section class="block-3 wrapper bg">
        <div class="bg-all">
          <div class="bg-card1">
            <h2>Высшее образование</h2>
            <div class="bg-card1-text">
              <a href="#">Бакалавриат</a>
              <a href="#">Специалитет</a>
              <a href="#">Магистратура</a>
            </div>
          </div>
          <div class="bg-card2">
            <h2>Аспирантура</h2>
            <div class="bg-card1-text">
              <a href="#">После специалитета</a>
              <a href="#">После магистратуры</a>
            </div>
          </div>
          <div class="bg-card3">
            <h2>СПО</h2>
            <div class="bg-card1-text">
              <a href="#">После 9 класса</a>
              <a href="#">После 11 класса</a>
            </div>
          </div>
          <div class="bg-card4">
            <h2>Дополнительное образование</h2>
            <div class="bg-card1-text">
              <a href="#">Подготовительные курсы</a>
              <a href="#">Проф. переподготовка</a>
              <a href="#">Повышение квалификации</a>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="upper1">
          <h1>Преимущества университета</h1>
        </div>
        <div class="advantages">
          <div class="advantage">
            <div class="image">
              <img src="img/stairs-solid.png" />
            </div>
            <h2>Рост по карьерной лестнице</h2>
            <h3>Руководящие должности доступны нашим вопускникам</h3>
          </div>
          <div class="advantage">
            <div class="image">
              <img src="img/city-solid.png" />
            </div>
            <h2>Вакансии в крупных компаниях</h2>

            <h3>
              Диплом вуза обязателен при трудоустройствев крупные компании
            </h3>
          </div>
          <div class="advantage">
            <div class="image">
              <img src="img/medal-solid.png" />
            </div>
            <h2>Подтвержденная квалификация</h2>

            <h3>Работодатели ценят кандидатов с квалификацией</h3>
          </div>
          <div class="advantage">
            <div class="image">
              <img src="img/money-bill-trend-up-solid.png" />
            </div>
            <h2>Увеличение доходов</h2>
            <h3>
              Заработная плата сотрудников с дипломом вуза выше чем с дипломом
              колледжа
            </h3>
          </div>
        </div>
      </section>
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
