<?php
    session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Book</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/kurs.css">
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
	<p class="zagalovok-main">Каталог курсов</p>
	<div class="block-kategor">
		<div class="wrapper">
			<div id="search-container">
				<input type="search" id="search-input" placeholder="Введите запрос..."/>
				<button id="search">Найти</button>
            </div>
			<div id="buttons">
				<button class="button-value" onclick="filterProduct('all')">Все</button>
				<button class="button-value" onclick="filterProduct('html')">HTML</button>
				<button class="button-value" onclick="filterProduct('css')">CSS</button>
				<button class="button-value" onclick="filterProduct('js')">JS</button>
				<button class="button-value" onclick="filterProduct('php')">PHP</button>
			</div>
			<div id="products">
			</div>
		</div>
	</div>
</main>
<footer>
        <p class="text-footer">IT-Book</p>
</footer>
<script src="js/categor.js"></script>
</body>
</html>   