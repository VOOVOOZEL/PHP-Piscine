<div>
	<button class="category" onclick="show_cars()">Автомобили</button>
	<button class="category" onclick="show_motos()">Мотоциклы</button>
	<button class="category" onclick="show_velos()">Велосипеды</button>
	<button class="category" onclick="show_all()">Показать все</button>
</div>
<script>
	function show_cars()
	{
		var moto = document.getElementsByClassName("moto");
		var velo = document.getElementsByClassName("velo");
		var car  = document.getElementsByClassName("car");
		for (let i = 0; i < moto.length; i++)
		{
			moto[i].style.display = "none";
		}
		for (let i = 0; i < velo.length; i++)
		{
			velo[i].style.display = "none";
		}
		for (let i = 0; i < car.length; i++)
		{
			car[i].style.display = "block";
		}
		
	}
	function show_motos()
	{
		var moto = document.getElementsByClassName("moto");
		var velo = document.getElementsByClassName("velo");
		var car  = document.getElementsByClassName("car");
		for (let i = 0; i < moto.length; i++)
		{
			moto[i].style.display = "block";
		}
		for (let i = 0; i < velo.length; i++)
		{
			velo[i].style.display = "none";
		}
		for (let i = 0; i < car.length; i++)
		{
			car[i].style.display = "none";
		}
	}
	function show_velos()
	{
		var moto = document.getElementsByClassName("moto");
		var velo = document.getElementsByClassName("velo");
		var car  = document.getElementsByClassName("car");
		for (let i = 0; i < moto.length; i++)
		{
			moto[i].style.display = "none";
		}
		for (let i = 0; i < velo.length; i++)
		{
			velo[i].style.display = "block";
		}
		for (let i = 0; i < car.length; i++)
		{
			car[i].style.display = "none";
		}
	}
	function show_all()
	{
		var moto = document.getElementsByClassName("moto");
		var velo = document.getElementsByClassName("velo");
		var car  = document.getElementsByClassName("car");
		for (let i = 0; i < moto.length; i++)
		{
			moto[i].style.display = "block";
		}
		for (let i = 0; i < velo.length; i++)
		{
			velo[i].style.display = "block";
		}
		for (let i = 0; i < car.length; i++)
		{
			car[i].style.display = "block";
		}
	}
</script>