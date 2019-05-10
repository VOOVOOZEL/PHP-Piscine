<?php session_start(); if ($_SESSION['loggedin'] == FALSE){ ?>
<?php ob_start(); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Вокруг света</title>
		<link rel="stylesheet" href="/css/main.css">
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<div id="wrapper">
			<header>
				<nav>
					<div id="menu">
						<div class="menuitem"><a href="/index.php">Главная</a></div>
			     		<div class="menuitem dropdown"><a href="#">Доставка и оплата</a></div>
			     		<div class="menuitem home"><i class="fas fa-motorcycle fa-2x"></i></div>
			     		<div class="menuitem"><i class="fas fa-user fa-1x"></i><a href="/registration.php">Регистрация</a></div>
			     		<div class="menuitem"><i class="fas fa-shopping-cart fa-2x"><p id="cart_goods">2</p></i></div>
			     	</div>
				</nav>
			</header>
			<section>
				<figure class="form">
					<figcaption>Регистрация</figcaption>
					<form method="POST" action="/functions/create_user.php">
						<input type="text" name="login" required placeholder="Логин" value="">
						<input type="text" name="name" required placeholder="Имя" value="">
						<input type="text" name="surname" required placeholder="Фамилия" value="">
						<input type="email" name="email" required placeholder="E-mail" value="">
						<input type="password" name="passwd" required placeholder="Пароль" value="">
						<input type="password" name="passwd_repeat" required placeholder="Повтор пароля" value="">
						<button type="submit" name="submit" value="OK" id="submit">Зарегистрироваться</button>
					</form>
				</figure>
			</section>
			<footer>
				
			</footer>
		</div>
	</body>
</html>
<?php } else if (header('Location: /index.php')) ?>