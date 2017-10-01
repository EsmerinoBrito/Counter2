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
	function mostraAlerta($tipo) {
		if (isset($_SESSION[$tipo])) {
		?>
			<p align="center" class="alert-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
		<?php
			unset($_SESSION[$tipo]);
		}
	}
?>