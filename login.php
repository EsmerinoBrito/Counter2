<?php require_once("banco-usuario.php");?>
<?php require_once("logica-usuario.php");?>
<?php 
	$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
	if($usuario ==  null) {
		$_SESSION["danger"] = "Usuário ou senha inválido!";
		header("Location: index.php");
	} elseif($usuario !=  null) {
		$_SESSION["success"] = "Usuário logado com sucesso!";
		logaUsuario($usuario["email"]);
		header("Location: index.php");
	}
die();