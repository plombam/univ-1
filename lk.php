<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Личный кабинет</title>
  </head>
  <body class="container">
    <header class="header">
      <a href="index.php">
        <h1>ФИД</h1>
      </a>
      <nav>
        <ul class="menu">
          <li><a href="abit.php">Абитуриенту</a></li>
          <li><a href="places.php">Студенту</a></li>
          <li><a href="contacts.php">Контакты</a></li>
          <li><a href="lk.php">ЛК</a></li>
          <li><a href="#">Eng</a></li>
        </ul>
      </nav>
    </header>
    <main class="wrapper">
        <h1>Личный кабинет</h1>
        <section>
            <div class="avatar">
                <div class="avatar-container avatar-size">
                    <img src="img/photo1.png" class="avatar-image">
                </div>
            </div>
        </section>
        <section class="lk-block wrapper bg">
          <p>Ф.И.О.</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">Стрюк Никита Андреевич</h3>
          </div>
          <p>Группа</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">11-ИС103</h3>
          </div>
          <p>Курс</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">3</h3>
          </div>
          <p>Уровень Образования</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">СПО</h3>
          </div>
          <p>Направление</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">Информационные технологии</h3>
          </div>
          <p>Учебное подразделение</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">Факультет Цифровых Технологий</h3>
          </div>
          <p>Форма обучения</p>
          <div class="lk-block-menu">
            <h3 class="lk-block-txt">Очная</h3>
          </div>
        </section>
        <section class="lk-btn">
          <form action="uspevaempst.php" class="btn-block-lk">
            <button >Успеваемость</button>
          </form>
          <form action="uchebn-plan.php" class="btn-block-lk">
            <button>Учебный план</button>
          </form>
          <form action="uspevaempst.php" class="btn-block-lk">
            <button>Зачетная книжка</button>
          </form>
          <form action="uspevaempst.php" class="btn-block-lk">
            <button>Услуги</button>
          </form>
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