<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" contet="IE=edge">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Doces da Vovó</title>
	<link rel="stylesheet" href="css/page.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/contato.css">
</head>
<body>
	<header>
		<img src="images/logo.png" alt="logo" class="logo">
	</header>
	<nav>
		<ul>
			<li><a href="index.php?home">Home</a></li>
			<li><a href="index.php?page=quemsomos">Quem Somos</a></li>
			<li><a href="index.php?page=produtos">Produtos</a></li>
			<li><a href="index.php?page=contato">Contato</a></li>
			<li><a href="index.php?page=localizacao">Localização</a></li>
		</ul>
	</nav>
	<div class="content">
			<div class="container">
				<?php
					$page= "home";

					if (isset($_GET['page'])){
						
						if(file_exists("pages/".$_GET['page'].".php")){
							$page= $_GET['page'];

						}
					}
						include("pages/$page.php");
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
