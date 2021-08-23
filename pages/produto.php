<?php
<style>
	. prod-cl{
		width: 50%;
	}
	. prod-cr{
		width: 50%;
	}
	.prod-cl img{
		width:300px;
		height: 300px;
		border-radius: 150px;
	}
</style>
	require_once('dados/produtos.php');
	$id= $_GET['id'];

	if(isset ($_GET['id'])){
		$id= $_GET['id'];

		if(!isset($produtos[$id]))
			$id=null;
	}


	if(is_null[$id])){
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
		<h2><?php echo $produtos[$id]['nome']?></h2>
	<p>
		<?ph echo $produtos[$id]['descricao']?>
</div>

