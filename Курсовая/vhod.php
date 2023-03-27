<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.entropy_file', '/dev/urandom');
ini_set('session.hash_function', 'whirlpool');
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
	session_start();
    include('php/config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Неверные пароль или имя пользователя!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
				$_SESSION['username'] = $result['username'];
				header("Location: testirovanie.php");
				exit;
				
                echo '<p style="position: absolute;margin-top: 17%; margin-left: 45%;">Вы прошли авторизацию!</p>';
            } else {
                echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
            }
        }
    }
?>
<?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p style="position: absolute;margin-top: 42%;margin-left: 43.5%;">Этот адрес уже зарегистрирован!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p style="position: absolute;margin-top: 42%;margin-left: 43.5%;">Регистрация прошла успешно!</p>';
            } else {
                echo '<p style="position: absolute;margin-top: 42%;margin-left: 43.5%;">Ќеверные данные!</p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFA</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/vhod.css">
</head>
<body>
<header style="margin-top: 1%;">
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
        <div class="block-vhod">
        <p class="zag-registr">Авторизация</p>
            <form method="post" action="" name="signin-form">
				<div class="form-element">
					<label>Логин</label><br>
					<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
				</div>
				<div class="form-element">
					<label>Пароль</label><br>
					<input type="password" name="password" required />
				</div>
			<button id="showContent" class="btn" type="submit" name="login" value="login">Войти</button>
			</form>
			<p class="linia">------------------------------------</p>
			<form method="post" action="" name="signup-form">
            <p class="zag-registr">Регистрация</p>
				<div class="form-element">
					<label>Логин</label><br>
					<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
				</div>
				<div class="form-element">
					<label>Почта</label><br>
					<input type="email" name="email" required />
				</div>
				<div class="form-element">
					<label>Пароль</label><br>
					<input type="password" name="password" required />
				</div>
			<button class="btn" type="submit" name="register" value="register">Регистрация</button>
			</form>

        </div>
        </div>
    </main>
	<footer>
		<p class="text-footer">IT-Book</p>
	</footer>
</body>
</html>
