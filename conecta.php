<?php
	$dominio= $_SERVER['HTTP_HOST'];
	if (strpos("[".$dominio."]", "localhost")) {
		$conexao = mysqli_connect('localhost', 'root', '', 'esmerino_counteruber');
	} else {
		$conexao = mysqli_connect('localhost', 'esmerino_counter', 'MeuBanco2008', 'esmerino_counteruber');
	}
