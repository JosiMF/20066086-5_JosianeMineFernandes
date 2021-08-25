<style>
	. prod-cl{
		width: 50%;
	}
	. prod-cr{
		width: 50%;
		margin-bottom: 10px;
	}
	.prod-cl img{
		width: 300px;
		height: 300px;
		border-radius: 150px;
	}
	.button{
		text-decoration: none;
		color: black;
		background-color: lightpink;
		padding: 12px;
		margin: 15px;
		

	}
</style>
<?php
	require_once('dados/produtos.php');
	$id= null;

	if(isset ($_GET['id'])){
		$id= $_GET['id'];

		if(!isset($produtos[$id]))
			$id=null;
	}
	if(is_null($id)){
?>
	<div>
		O código nulo ou não existente.
	</div>
<?php
	}else {

?>

<div class="prod-cl">
	<img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
</div>
<div class="prod-cr">
		<h1><?php echo $produtos[$id]['nome']?></h1>
	<p>
		<?php echo $produtos[$id]['descricao']?>
	</p>
	<a href="index.php?page=contato" class="button">
		Fazer Pedido
	</a>
</div>
<?php
	}
?>