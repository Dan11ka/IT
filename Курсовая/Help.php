<?php
    session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFA</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/help.css">
</head>
<body>
<header>
        <p class="text-menu">IT-Book</p></a>
            <nav>
                <a class="li" href="index.php">Курсы</a>
                <a class="li" href="Testirovanie.php">Тестирование</a>
                <a class="li" href="Help.php">Помощь</a>
				<a class="li" href="vhod.php">Войти</a>
				<a class="li" href="exit.php"><?php echo @$_SESSION['username']; ?></a>
            </nav>
</header>
<main>
	<p class="text-main">Обратная связь</p>
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="phone details">
            <div class="topic">Телефон</div>
            <div class="text-one">8-800-000-00-00</div>
            <div class="text-two">8-900-000-00-00</div>
          </div>
          <div class="email details">
            <div class="topic">Email</div>
            <div class="text-one">support@mail.ru</div>
            <div class="text-two">admin@mail.ru</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Отправьте нам сообщение</div>
          <p>
            Если вы заметили ошибку, подробно опишите ее суть и обстоятельства возникновения ниже
          </p>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Ваше имя" />
            </div>
            <div class="input-box">
              <input type="text" placeholder="Введите email" />
            </div>
            <div class="input-box">
              <input type="text" placeholder="Введите телефон" />
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Сообщение"></textarea>
            </div>
            <div class="button">
              <input type="button" value="Отправить" />
            </div>
          </form>
        </div>
      </div>
    </div>

        
</main>
<footer>
        <p class="text-footer">IT-Book</p>
</footer>
</body>
<html>   
