<?php require_once("mostra-alerta.php");?>
<?php
	mostraAlerta("success");
	mostraAlerta("danger");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link href="/wp-content/plugins/bootstrap-3-shortcodes/includes/help/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/loja.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-hearder">
				<a class="navbar-brand" href="index.php">Minha Loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produto</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="principal">