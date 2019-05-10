<?php
	session_start();
	include("header.php");
?>
<?php if (isset($_SESSION) and $_SESSION['role'] === 'admin'){ ?>
		<section>
			<figure class="form add">
				<figcaption>Добавление товара</figcaption>
				<form method="POST" action="/functions/add_item.php">
					<select name="category">
					    <option disabled>Категория товара</option>
					    <option name="moto" value="moto">Мотоциклы</option>
					    <option name="velo" value="velo">Велосипеды</option>
					    <option name="car" value="car">Автомобили</option>
				    </select>
					<input type="text" name="name" placeholder="Название" value="" required="">
					<textarea rows="5" name="desc" placeholder="Описание" value="" required=""></textarea>
					<input type="text" name="price" placeholder="Цена" value="" required="">
					<input type="number" name="stock" placeholder="Количество" value="1" min="1" max="50">
					<input type="text" name="img" src="" width="50" placeholder="Изображение товара" value="" required="">
					<button type="submit" name="submit" value="OK">Добавить товар</button>
				</form>
			</figure>
		</section>
		<?php } ?>
		<section>
		<?php 
			if (isset($_SESSION) and $_SESSION['role'] !== 'admin')  
				echo "403 FORBIDDEN";
		?>
		</section>
		<footer>
		<?php
			include("footer.php");
		?>
		</footer>
	</div>
	</body>
</html>