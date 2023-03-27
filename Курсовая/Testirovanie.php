<?php
    require_once 'php/test.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFA</title>
	<link rel="stylesheet" href="css/testirovanie.css">
    <link rel="stylesheet" href="css/style.css">
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
	<p class="zagalovok-main">Каталог тестов</p>
			<?php
				if((isset($_SESSION['username'])&& $_SESSION['username'] == "admin")){
					echo'<div class="block-kategor">';
				$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
				t.body FROM usertest
				r JOIN users u ON r.userID = u.id 
				JOIN test t ON r.testID = t.id 
				where userID = 1");
				$usertest = mysqli_fetch_all($usertest);
				foreach ($usertest as $usertes) {
                ?> 
                <?= $usertes[3] ?>
				<?php
				}
		echo'<footer>
		<p class="text-footer">IT-Book</p>
		</footer>';
	}else
				if((isset($_SESSION['username'])&& $_SESSION['username'] == "userHTML")){
					echo'<div class="block-kategor" style="display: flex;">';
				$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
				t.body FROM usertest
				r JOIN users u ON r.userID = u.id
				JOIN test t ON r.testID = t.id 
				where userID = 2");
				$usertest = mysqli_fetch_all($usertest);
				foreach ($usertest as $usertes) {
                ?> 
                <?= $usertes[3] ?>
                <?php
				}
				
		echo'</div>
		<footer>
		<p class="text-footer">IT-Book</p>
		</footer>';		;
		}else
				if((isset($_SESSION['username'])&& $_SESSION['username'] == "userCSS")){
					echo'<div class="block-kategor" style="display: flex;">';
				$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
				t.body FROM usertest
				r JOIN users u ON r.userID = u.id
				JOIN test t ON r.testID = t.id 
				where userID = 3");
				$usertest = mysqli_fetch_all($usertest);
				foreach ($usertest as $usertes) {
                ?> 
                <?= $usertes[3] ?>
                <?php
				}
				
		echo'</div>
		<footer>
		<p class="text-footer">IT-Book</p>
		</footer>';		;
		}else
				if((isset($_SESSION['username'])&& $_SESSION['username'] == "userJS")){
					echo'<div class="block-kategor" style="display: flex;">';
				$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
				t.body FROM usertest
				r JOIN users u ON r.userID = u.id
				JOIN test t ON r.testID = t.id 
	where userID = 4");
				$usertest = mysqli_fetch_all($usertest);
				foreach ($usertest as $usertes) {
                ?> 
                <?= $usertes[3] ?>
                <?php
				}
				
		echo'</div>
		<footer>
		<p class="text-footer">IT-Book</p>
		</footer>';		;
		}else
				if((isset($_SESSION['username'])&& $_SESSION['username'] == "userPHP")){
					echo'<div class="block-kategor" style="display: flex;">';
				$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
				t.body FROM usertest
				r JOIN users u ON r.userID = u.id
				JOIN test t ON r.testID = t.id 
				where userID = 5");
				$usertest = mysqli_fetch_all($usertest);
				foreach ($usertest as $usertes) {
                ?> 
                <?= $usertes[3] ?>
                <?php
				}
				
		echo'</div>
		<footer>
		<p class="text-footer">IT-Book</p>
		</footer>';		;
	}else
	if((isset($_SESSION['username'])&& $_SESSION['username'] == "user")){
		echo'<div class="block-kategor" style="display: flex;">';
	$usertest = mysqli_query($connect, "SELECT r.userID, u.username, t.testname,
	t.body FROM usertest
	r JOIN users u ON r.userID = u.id
	JOIN test t ON r.testID = t.id 
	where userID = 7");
	$usertest = mysqli_fetch_all($usertest);
	foreach ($usertest as $usertes) {
	?> 
	<?= $usertes[3] ?>
	<?php
	}
	
echo'</div>
<footer>
<p class="text-footer">IT-Book</p>
</footer>';		;
	} else
	header('Location: ./vhod.php');
    exit;
			
			?>

</main>
</body>
</html>








