<?php 
	$dados = file("fornecedor.txt");	
	$id = $_GET['cod'];
	unset($dados[$id]);
	unlink("fornecedor.txt");
	$string = implode("", $dados);

    $arquivo = fopen("fornecedor.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	header("location: fornecedores.php");





?>