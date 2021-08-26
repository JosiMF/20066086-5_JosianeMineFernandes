<style>
	.form-contact{
		width: 100%;
	}
	.form-contact input, textarea{
		font-family: inherit;
		font-size: 16px;
		margin-top: 20px;
		padding: 20px;
		width: 100%;
		border:  1px, solid, hotpink;
		border-radius: 7px;
	}
	.form-title{
		text-align: center;
	}
	.form-contact button{
		text-decoration: none;
		color: black;
		padding: 12px;
		margin: 15px;
		font-weight: bold;
		border-radius: 7px;
		background-color: lightpink;
		cursor: pointer;
	}
	.message{
		border: 1px, solid, hotpink;
		padding: 40px;
		font-size: 18px;
		text-align: center;
		width: 100%;
		border-radius: 7px;
	}

</style>
<?php
	$action="form";
	if(isset($_GET['action']))
		$actio = $_GET['action'];
	else
		$action = "form";
	if($action=="form"):
?>


<form action="?page=contato&action=enviar" method="POST" class="form-contact">
	
	<div class="form-title"><h1>Contato e Pedidos</h1></div>

	<div>
		<input type="text" placeholder="Nome" name="nome">
	</div>
	<div>
		<input type="email" placeholder="E-mail" name="email">
	</div>
	<div>
		<input type="text" placeholder="Telefone" name="telefone">
	</div>
	<div>
		<textarea name="mensagem" placeholder="Descreva aqui seu pedido, dúvidas, sugestão" rows="9"></textarea>
	</div>
	<div>
		<button>Enviar</button>
	</div>
</form>
<?php endif ?>

<?php
	if($action== "enviar"):
?>
	<div class="message">
		Sua mensagem foi enviada com sucesso.
		<p>Em breve entraremos em contato</p>
	</div>
<?php
	endif 
?>