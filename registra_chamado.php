<?php
	session_start();

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	//definindo o que será escrito.

	$titulo = str_replace('#', '-', $_POST['titulo']) ;
	$categoria = str_replace('#','-', $_POST ['categoria']);
	$descricao = str_replace('#','-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//criando um arquivo de texto.
	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
	

	//escrevendo no arquivo txt o conteúdo dentro da variavel
	fwrite($arquivo, $texto); 

	//fechando o arquivo que foi aberto após a escrita
	fclose($arquivo);

	//echo $texto;	

	header('Location: abrir_chamado.php');

?>
