<?php require_once 'cabecalho.php';?>
<?php require_once("logica-usuario.php");?>
<?php require_once("banco-produto.php");?>

<h1>Relação de Produtos</h1>
<table class="table table-striped table-bordered"	>
	<tr>
		<td><b>Produto</b></td>
		<td><b>Preço</b></td>
		<td><b>Descrição</b></td>
		<td><b>Categoria</b></td>
	</tr>
	<?php
		$produtos = listaProdutos($conexao);

		foreach ($produtos as $produto) :
			?>
				<tr>
					<td><?=$produto->nome?></td>
					<td><?=$produto->preco?></td>
					<td><?=substr($produto->descricao, 0, 40)?></td>
					<td><?=$produto->categoria->nome?></td>
					<td>
						<form action="produto-altera-formulario.php" method="post">
							<input type="hidden" name="id" value="<?=$produto->id?>">
							<button class="btn btn-primary">Altera</button>
						</form>
					</td>
					<td>
						<form action="remove-produto.php" method="post">
							<input type="hidden" name="id" value="<?=$produto->id?>">
							<button class="btn btn-danger">Remover</button>
						</form>
					</td>
				</tr>
			<?php
		endforeach
	?>
</table>

<?php include("rodape.php");?>