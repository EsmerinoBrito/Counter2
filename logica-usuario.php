<?php
	if (version_compare(phpversion(), '5.4.0', '<')) {
	     if(session_id() == '') {
	        session_start();
	     }
	 }
	 else
	 {
	    if (session_status() === PHP_SESSION_NONE) {
	        session_start();
	    }
	 }

	function usuarioEstaLogado() {
		return isset($_SESSION["usuario_logado"]);
	}

	function verificaUsuario() {
		if (!usuarioEstaLogado()) {
			$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
			header("Location: index.php?falhaDeSeguranca=true");
			die();
		}
	}

	function usuarioLogado() {
		return $_SESSION["usuario_logado"];
	}

	function logaUsuario($email) {
		$_SESSION["usuario_logado"] = $email;
	}

	function logout() {
		session_destroy();
		session_start();
	}