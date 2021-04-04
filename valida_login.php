<?php

	//iniciando sessão(sempre colocar antes de qualquer output)
	session_start();



	//verifica se autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	//usuários do sistema

	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)  
	);
	/*
	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';
	*/
	foreach ($usuarios_app as $user) {
				
		if ($user ['email'] == $_POST['email'] && $user ['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id =  $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}	

		if ($usuario_autenticado == true) {
			echo 'Usuário autenticado';
			$_SESSION['autenticado'] = 'SIM';
			$_SESSION['id'] = $usuario_id;
			$_SESSION['perfil_id'] = $usuario_perfil_id;
			header('Location:home.php');//forçando o redirecionamento para pagina home.
		} else{
			$_SESSION['autenticado'] = 'NAO';
			header('Location:index.php?login=erro'); // função força o redirecionamento da pagina

		} 
	

	/*
	print_r($_GET); //superglobal $_GET(expõe as informações do formulário na URL)

	echo '<br/>';

	echo $_GET['email'];
	echo '<br/>';
	echo $_GET['senha'];
	*/

	/*
	print_r($_POST); //recupera as infos do formulário e não exibe na URL

	echo '<br/>';

	echo $_POST['email'];
	echo '<br/>';
	echo $_POST['senha'];
	*/
?>