<?php session_start(); ?>
<?php include("header.php");?>
<?php if (isset($_SESSION) and $_SESSION['role'] === 'admin'){ ?>
<section>
			<figure class="form">
				<figcaption>Удалить пользователя</figcaption>
				<form class="auth" method="POST" action="/functions/delete_user.php">
					<input type="login" name="login" placeholder="Логин для удаления" value="">
					<input type="password" name="passwd" required placeholder="Пароль admin" value="">
				<button type="submit" name="submit" value="OK" id="submit">Изменить</button>
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