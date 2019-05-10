<html>
	<head>
		<meta charset="utf-8">
		<title>Вокруг света</title>
		<link rel="stylesheet" href="/css/main.css">
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script type="text/javascript" src="/js/general.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<nav>
					<div id="menu">
						<div class="menuitem"><a href="/index.php">Главная</a></div>
			     		<div class="menuitem dropdown"><a href="#">Доставка и оплата</a></div>
			     		<div class="menuitem home"><i class="fas fa-motorcycle fa-2x"></i></div>
			     		<?php if ($_SESSION && $_SESSION['loggedin'] == TRUE){ ?>
			     		<div class="menuitem dropdown"><i class="fas fa-user fa-1x"></i><a href="#"><?php echo $_SESSION['authorized_user'];?></a>
			     		<div class="dropmenu">
						<?php if ($_SESSION && $_SESSION['role'] == 'admin'){ ?>
							<div class="menuitem"><a href="delete_user.php">Удалить пользователя</a></div>
						<?php } ?>
						 	<div class="menuitem"><a href="change_user_data.php">Настройки</a></div>
     						<div class="menuitem"><a href="change_pass.php">Изменить пароль</a></div>
     						<div class="menuitem"><a href="/functions/logout.php">Выход</a></div>
						</div>
						</div>
			     		<?php } ?>

			     		<div class="menuitem"><a href="cart.php"><i class="fas fa-shopping-cart fa-2x"><p id="cart_goods"><?php echo count($_SESSION['cart_items']); ?></p></i></a></div>
						 </div>
					</nav>
			</header>