<?php require_once("cabecalho.php");?>
<?php require_once("banco-categoria.php");?>
<?php require_once("banco-produto.php");?>
<?php
	$id = $_POST['id'];
	$produto = buscaProduto($conexao, $id);
	$categorias = listaCategorias($conexao);
	$usado = $produto['usado'] ? "checked = 'checked'" : "";
?>
<h1>Alterando Produto</h1>
<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">

		<?php include("produto-formulario-base.php") ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include("rodape.php");?>