<?php
	require_once('dados/produtos.php');
?>

<style>
	.card-produto img{
		width: 200px;
		height: 200px;
		border-radius: 100px;
	}
	card-produto{
		text-align: center;
		width: 200px;
		font: arial, 20;
		margin: 40px;

	}
</style>

<?php
	foreach($produtos as $produtos):
?>

<a href="index.php?page=produtos&id=<?php echo $produto['id']?>"
	<div class="card-produto">
		<img src="images/<?php echo $produtos['imagem']?>" alt="<?php echo $produtos['nome']?>">
			<h3><?php echo $produtos['nome']?></h3>
		
	</div>
<?php
	endforeach
?>