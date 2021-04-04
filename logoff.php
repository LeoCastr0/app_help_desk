<?php
	
	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//remover indices do array de sessão
	//unset(array [indice])
	unset($_SESSION['x']); // remover o indice somente se existir

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	
	//destruir a varável de sessão
	//session_destroy() - remove todos os indices de sessão sa global session
	session_destroy(); //será destruída
	//forçar um redirecionamento.

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/

	session_destroy();
	header('Location: index.php')
?>