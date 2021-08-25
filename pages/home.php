<?php
	require_once ('dados/produtos.php');
?>

<style>
	.card-produto img{
		width: 200px;
		heigt: 200px;
		border-radius: 100px;
	}
	.card-produto{
		width: 200px;
		text-align: center;
		margin: 30px;
	}
</style>

<?php
	foreach($produtos as $produtos)
<div class="card-produto">
	<img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto ['nome']">
	<h3><?php echo $produto ['nome']?></h3>
</div>