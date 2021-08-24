<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" contet="IE=edge">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Doces da Vovó</title>
<style>
	body{
		margin: 0;
	}
	header{
		height: 150px;
		background-color: hotpink;
		text-align: center;
		paddin: 25px;

	}
	.logo{
		height: 130px;
	}
	nav{
		background-color: lightpink;

	}
	nav ul{
		list-style: none;
		width: 100%;
		margin: 0px;
		padding: 0;
		display: flex;
		justify-content: center;
	}
	nav ul li{
		padding: 12px;
		padding-left: 25px;
		padding-right: 25px;
		padding-top: 12px;
	}
	.content{
		min-height: 400px;
	}
	footer{
		background-color: lightpink;
		min-height: 50px;
		padding: 40px;
	}
	.container{
		max-width: 800px;
		display: flex;
		margin: auto;
		padding-top: 30px;
		flex-wrap: wrap;
		justify-content: space-between;
	}
</style>
</head>
<body>
	<header>
		<img src="images/logo.png" alt="logo" class="logo">
	</header>
	<nav>
		<ul>
			<li>Home</li>
			<li>Quem Somos</li>
			<li>Contato</li>
			<li>Localização</li>
		</ul>
	</nav>
	<div class="content">
			<div class="container">
				<?php
					include ('pages/home.php');
				?>
			</div>
	</div>
	<footer>
		Josiane Mine Fernandes<br>
		RA: 20066086-5 <br>
		Curso: Sistemas para Internet<br>
		UNICESUMAR
	</footer>

</body>
</html>
