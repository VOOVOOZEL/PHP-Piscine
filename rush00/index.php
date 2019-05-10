<?php
	session_start();
	include("header.php");
	include("./functions/install.php")
?>
			<section>
				<aside>
				<?php if (!isset($_SESSION) or $_SESSION['loggedin'] == FALSE){ ?>
					<figure class="form auth">
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
				<?php } else if ($_SESSION['role'] === 'admin'){ ?>
				<figure class="form auth">
					<form action="add_item.php">
						<button name="submit">Добавить товар</button>
					</form>
				</figure>
				<?php } ?>
				<?php include("side.php"); ?>
				</aside>
				<main>
					<div id="items">
						<?php foreach($_SESSION['goods'] as $cat_id => $categorie){
							foreach($categorie['items'] as $item_id => $item){
								echo '<div class="item ' . $categorie['category_name'] . '">
								<form action="/functions/add_item_to_cart.php">
										<a href="' . $item['url'] .'">
											<img class="item_image" alt="Image" src="' . $item['img'] . '">
											<div class="item_description">
												<p class="item_name">' . $item['name'] . '</p>
												<p class="item_price">' . $item['price'] . ' руб.</p>
												<input style="visibility:hidden;" type="number" name="category_id" value="' . $cat_id .'">
												<input style="visibility:hidden;" type="number" name="item_id" value="' . $item_id .'">
												<input style="visibility:hidden;" type="number" name="stock" value="1">
												<input style="visibility:hidden;" type="number" name="price_id" value="' . $item['price'] .'">
											</div>
										</a>
											<button name="submit">Добавить в корзину</button>
										</form>
									</div>';
					}
				} ?>
					</div>
				</main>
			</section>
			<footer>
			<?php
				include("footer.php");
			?>
			</footer>
		</div>
	</body>
</html>