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
		font-family: Arial;
	}
	header{
		height: 150px;
		background-color: hotpink;
		text-align: center;
		padding: 25px;

	}
	.logo{
		height: 160px;
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
	.content img {
		width: 500px;
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
	}
	.doce {
		width: 100%;
		text-align: center;
		border:  1px solid #ccc;
		margin-bottom: 10px;
		padding: 10px;
	}
	.container{
		max-width: 800px;
		display: flex;
		justify-content: space-between;
		margin: auto;
		padding-top: 20px;
		flex-wrap: wrap;
	}
</style>
</head>
<body>
	<header>
		<img src="images/logo.png" alt="logo" class="logo">
	</header>
	<nav>
		<ul>
			<li><a href="index.php?page=home">Home</a></li>
			<li><a href="index.php?page=quemsomos">Quem Somos</a></li>
			<li><a href="index.php?page=produtos">Produtos</a></li>
			<li><a href="index.php?page=contato">Contato</a></li>
			<li><a href="index.php?page=localizacao">Localização</a></li>
		</ul>
	</nav>
	<div class="content">
			<div class="container">
				<?php

					$page = $_GET['page'] ?? 'home';

					$arquivo = "pages/{$page}.php";

					include ($arquivo);

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
