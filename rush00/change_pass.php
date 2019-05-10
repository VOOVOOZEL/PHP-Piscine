<?php session_start(); ?>
<?php include("header.php");?>
			<section>
				<figure class="form">
					<figcaption>Изменение пароля</figcaption>
					<form method="POST" action="/functions/change_pwd.php">
						<input type="password" name="oldpw" placeholder="Старый пароль" value="">
						<input type="password" name="newpw" placeholder="Новый пароль" value="">
						<input type="password" name="newpw_repeat" placeholder="Повтор нового пароля" value="">
						<button type="submit" name="submit" value="OK" id="submit">Изменить пароль</button>
					</form>
				</figure>
			</section>
			<footer>
				
			</footer>
		</div>
	</body>
</html>