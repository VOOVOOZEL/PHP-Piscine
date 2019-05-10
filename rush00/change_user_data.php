<?php session_start(); ?>
<?php include("header.php");?>
<?php $arr = unserialize(file_get_contents('./static/private/passwd')); 
	foreach ($arr as $val){
    if ($val['login'] === $_SESSION['authorized_user']){
		$name = $val['name'];
		$surname = $val['surname'];
		$email = $val['email'];
	}
}
?>
			<section>
				<figure class="form">
					<figcaption>Изменение данных</figcaption>
					<form method="POST" action="/functions/change_user_data.php">
						<input type="text" name="name" placeholder="Имя" value="<?php echo $name ?>">
						<input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname ?>">
						<input type="text" name="login" required placeholder="Логин" value="<?php echo $_SESSION['authorized_user'] ?>">
						<input type="email" name="email" placeholder="E-mail" value="<?php echo $email ?>">
						<input type="password" name="passwd" required placeholder="Пароль" value="">
					<button type="submit" name="submit" value="OK" id="submit">Изменить</button>
					</form>
				</figure>
			</section>
			<footer>
				
			</footer>
		</div>
	</body>
</html>