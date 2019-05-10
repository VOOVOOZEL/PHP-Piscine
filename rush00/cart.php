<?php
	session_start();
	include("header.php");
?>
<section style="overflow:overlay;">
	<main style="flex-grow:1; margin: 50px auto; justify-content: space-around;">
	<form action="check.php">
		<div id="cart">
			<h1>Корзина</h1>
			<div class="cart_field">
				<div><p>Наименование товара</p></div>
				<div><p>Количество</p></div>
				<div><p>Цена</p></div>
				<div><p>Стоимость</p></div>
				<div><p>Удаление</p></div>
			</div>
			<?php if (isset($_SESSION['cart_items']))
				{
					$tmp = 0;
					foreach($_SESSION['cart_items'] as $id => $item){
					echo '			<div class="cart_field">
					<div>
						<figure>
							<img class="cart_image" alt="Image" src="'. $_SESSION['goods'][$item['category_id']]['items'][$item['item_id']]['img']  . '">
							<figcaption><p class="item_name">' . $_SESSION['goods'][$item['category_id']]['items'][$item['item_id']]['name'] . '</p></figcaption>
						</figure>
					</div>
					<div><p><input type="number" value="'. $_SESSION['cart_items'][$id]['stock'] .'" name="stock" min="0" max="'. $_SESSION['goods'][$item['category_id']]['items'][$item['item_id']]['stock'] .'" onchange="calc1()"></p></div>
					<div><p name="price">' . $_SESSION['cart_items'][$id]['price_id'] . '</p></div>
					<div><p id="result1"></p></div>
					<div><p><a href="/functions/remove_item_from_cart.php?category_id='. $item['category_id'] .'&item_id=' . $item['item_id'] . '">Удалить</a></p></div>
				</div>';
				$tmp += $_SESSION['cart_items'][$id]['stock'] * $_SESSION['cart_items'][$id]['price_id'];
				}
				echo '<div class="cart_field">
				<div><p>Итого:</p></div>
				<div><p id="res">' . $tmp .'</p></div>
				</div>' ;
			}?>
			<div class="cart_field auth">
			<?php if (isset($_SESSION['cart_items']))
				echo "<div><button type=\"submit\" name=\"submit\" value=\"OK\">Подвердить покупку</button></div>"  ?>
			</div>
			</div>
			</form>
		</main>
	</section>
	<footer>
	<?php
		include("footer.php");
	?>
	</footer>
	</div>
	<script>
		var a = document.getElementsByName("price")[0].innerHTML;
		var b = document.getElementsByName("stock")[0].value;
		var c = document.getElementsByName("stock")[0].max;
		if (b > c){
			document.getElementsByName("stock")[0].value = c;
		}
		document.getElementById("res").innerHTML = a * b + " руб.";
		function calc()
            {
                setInterval(function()
                    {
                        var a = document.getElementsByName("price")[0].innerHTML;
                        var b = document.getElementsByName("stock")[0].value;
                        document.getElementById("result1").innerHTML = a * b + " руб.";
                    }, 50);
            }
		function calc1()
        {
            setInterval(function()
                {
                    var a = document.getElementsByName("price");
                    var b = document.getElementsByName("stock");
					var c = 0;
					for (let i = 0, j = 0; i < a.length, j < b.length; i++, j++)
						c += a[i].innerHTML * b[j].value;
                    document.getElementById("res").innerHTML = c + " руб.";
                }, 50);
		}
		</script>
	</body>
</html>