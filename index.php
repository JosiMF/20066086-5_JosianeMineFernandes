<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name= "viewport" content="width=device-width, initial-scale=1.0">
	<title>Doces da Vovó</title>
	<style>
		body{
			margin: 0;
			font-family: 'arial';
		}
		header{
			height: 180px;
			background-color: hotpink;
			text-align: center;
			padding: 10px;
		}
	.logo{
		height: 170px;
	}

		nav{
			background-color: lightpink;

		}
		nav ul{
			list-style: none;
			width: 100%;
			margin:  0px;
			padding: 0;
			display:  flex;
			justify-content: center;
		}

		nav ul li{
			padding-top: 15px;
			padding-left: 30px;
			padding-right: 30px;
			padding-bottom: 15px ;
		}

		.content{
			min-height: 500px;
		}

		footer{
			background-color: lightpink;
			min-height: 50px;
			padding: 20px ;
			margin:  0px;
			text-align: center;
		}
		.container{
			max-width: 700px;
			display:  flex;
			justify-content: space-between ;
			margin:  auto;
			padding-top: 35px;
			flex-wrap: wrap;
			text-align: center;
		}

</style>
	<header>
		<img src= "images/logo.jpg" alt="logo" class="logo">
	</header>
	<nav>
		<ul>
			<li>Home</li>
			<li>Quem Somos</li>
			<li>Contatos</li>
			<li>Localização</li>
		</ul>
	</nav>
	<div class="content">
		<div class="container">
		<?php
			$page= "home";

			if(isset($_GET['page'])){
				
				if(file_exists("pages/".$_GET['page'].".php")){
				$page = $_GET['page'];	
				}
			}
			include ("pages/$page.php");
		?>
		</div>
	</div>

	<footer>
		Josiane Mine Fernandes <br>
		RA: 20066086-5<br>
		Curso: Sistemas para Internet<br>
		UNICESUMAR
	</footer>
	</body>
</html>


