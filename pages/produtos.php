<style>
	.grid {
		display: grid;
		grid-template-columns: auto auto auto;
		width: 100%;
	}
	.coluna {
		border: 1px solid #ccc;
		margin: 10px;
		padding: 10px;
		text-align: center;
	}
	.coluna img {
		width: 100%;
	}
</style>
<h1>Produtos</h1>
<div class="grid">
<?php
	require_once('dados/produtos.php');

	foreach ($produtos as $p) {
		$nome = $p['nome'];
		$imagem = $p['imagem'];
		$id = $p['id'];

		?>
		<div class="coluna">
			<img src="images/<?php echo $imagem;?>">
			<p><strong><?php echo $nome;?></strong></p>
			<p>
				<a href="index.php?page=produto&id=<?php echo $id;?>">
					Detalhes
				</a>
			</p>
		</div>
		<?php 

	}
	?>
</div>

