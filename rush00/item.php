<?php
	session_start();
	include("header.php");
?>
<section>
		<aside>
		<?php if (!($_SESSION) or $_SESSION['loggedin'] == FALSE){ ?>
			<figure class="form auth">
				<!--<figcaption>Авторизоваться</figcaption>-->
				<form method="GET" action="/functions/login.php">
					<input type="text" name="login" placeholder="Логин" value="">
					<input type="password" name="passwd" placeholder="Пароль" value="">
					<input type="submit" name="submit" value="Войти">
				</form>
			</figure>
			<hr>
			<figure class="form auth">
				<form action="/registration.php">
					<input type="submit" name="submit" value="Зарегистрироваться">
				</form>
			</figure>
			<hr>
		<?php } else if (isset($_SESSION) and $_SESSION['role'] === 'admin'){ ?>
			<figure class="form auth">
				<form action="add_item.php">
					<button type="submit" name="submit" value="OK">Добавить товар</button>
				</form>
			</figure>
			<hr>
		<?php } ?>
		</aside>
		<main>
			<div class="solo">
				<div class="soloitem moto">
					<div>
						<figure>
							<img class="soloitem_image" alt="Image" src="<?php echo $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['img'] ?>">
							<figcaption><p class="soloitem_name"><?php echo $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['name'] ?></p></figcaption>
						</figure>
						<div class="soloitem_description">
								<p><?php echo $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['desc'] ?></p>
						</div>
					</div>
					<hr>
					<div class = "cost">
						<p class="soloitem_price" name="price">Стоимость: <?php echo $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['price'] ?> руб.</p>
						<form class="auth" action="/functions/add_item_to_cart.php">
							<span>Количество: </span><input type="number" name="stock" min="1" max="99" size="2" onchange="calc()">
							<input style="visibility:hidden; max-width:1px; user-select: none" type="number" name="category_id" value="<?php $_GET['category_id']?>">
							<input style="visibility:hidden; max-width:1px; user-select: none" type="number" name="item_id" value="<?php $_GET['item_id']?>">
							<input style="visibility:hidden; max-width:1px; user-select: none" type="number" name="item_name" value="<?php $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['name'] ?>">
							<input style="visibility:hidden; max-width:1px; user-select: none" type="text" name="item_img" alt="Image" value="<?php
								header('Content-Type: text/plain');
								$_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['img'];
							?>">
							
							<input style="visibility:hidden; max-width:1px; user-select: none" type="number" name="price_id" value="<?php echo $_SESSION['goods'][$_GET['category_id']]['items'][$_GET['item_id']]['price'] ?>">
							<br>
							<span>Итого: </span><p id="result"></p>
							<button type="submit" name="submit" value="OK">Добавить в корзину</button>
						</form>
					</div>
				</div>
			</div>
			</main>
		</section>
		<footer>
		<?php
			include("footer.php");
		?>
		</footer>
		</div>
		<script>
		var a = document.getElementsByName("price_id")[0].innerHTML;
		var b = document.getElementsByName("stock")[0].value;
		document.getElementById("result").innerHTML = a * b + " руб.";
			function calc()
            {
                setInterval(function()
                    {
                        var a = document.getElementsByName("price_id")[0].value;
                        var b = document.getElementsByName("stock")[0].value;
                        document.getElementById("result").innerHTML = a * b + " руб.";
                    }, 50);
            }
		</script>
	</body>
</html>